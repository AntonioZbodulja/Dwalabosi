<?php
//ako je mobitel radi redirect

<?php
$useragent=$_SERVER['HTTP_USER_AGENT'];
if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
header('Location: http://localhost/stranice/DWA/8labvjezba/mobilna/');
?>


//bootstrap the application
require_once 'bootstrap.php';

// sustav ne koristi lokalne sesije, nego kriptirane kolačiće kod korisnika. Ovo je lozinka.
$app->add(new \Slim\Middleware\SessionCookie(array('secret' => 'DWA2013')));



// funkcija koja provjerava je li korisnik autenticiran. U osnovi provjerava SESSION vrijednost 
// 'user', i ako nije ulogiran preusmjerava ga na login stranicu
$authenticate = function ($app) {
    return function () use ($app) {
        if (!isset($_SESSION['user'])) {
            $_SESSION['urlRedirect'] = $app->request()->getPathInfo();
            $app->flash('error', 'Login required');
            $app->redirect($app->urlFor('login'));
        }
    };
};

// postavlja neke parametre prije davanja stranice template enginu - u ovom
// slučaju samo postavlja ime korisnika 
$app->hook('slim.before.dispatch', function () use ($app) {
    $user = null;
    if (isset($_SESSION['user'])) {
        $user = $_SESSION['user'];
    }
    $app->view()->setData('user', $user);
});

// Kontrola što se dobiva na stranici na čistom URL-u, bez ikakve dodatne oznake.
// Prije pokretanja ove funkcije poziva se $authenticate funkcija.
// Napomena: isključivo GET metoda radi na ovu stranicu.
$app->get('/', $authenticate($app), function () use ($app) {
    
    // sav kod za stranicu se nalazi u logic/basePage.php
    require_once "logic/basePage.php";
    
    $app->render('basePage');
})->name('basePage');


// Kontrola za stranicu za /login 
// GET za login - netko se tek želi spojiti. Primjetiti kako $app poziva get
$app->get('/login', function () use ($app) {
    $app->render('login');
})->name('login');


// Kontrola za stranicu za /login 
//POST za login - predaja parametara. Primjetiti kako $app poziva post
$app->post('/login', function () use ($app) {
    require_once "logic/auth.php";
    if (isset($_SESSION['user']) && strlen($_SESSION['user']) > 0) {
        $app->redirect($app->urlFor('basePage'));
    } else {
        $app->flashNow("error", "Greška u korisničkom imenu ili lozinci");
        $app->render('login');
    }
});


// Kontrola za logout
// isključivo GET pristup stranici.
$app->get('/logout', $authenticate, function () use ($app) {
    if (isset($_SESSION['user'])) {
        unset($_SESSION['user']);
        $app->flashNow("error", "Hvala na korištenju sustava");
        $app->render('login');
    } else {
        $app->flashNow("error", "Za odspajanje je potrebno prvo biti spojeni!");
        $app->render('login');
    }

});

// kontrola za pregled jedne vijesti. Sav kod je umetnut ovdje u kontroler
// isključivo GET pristup stranici
$app->get('/news/:id', $authenticate($app), function($id) use ($app) {
    
    include_once('logic/idiormUse.php');

    // ovo se moglo napisati i drugačije, pogledati dokumentaciji Idiorma
    $vijest = ORM::for_table('vijesti')
        ->select('vijesti.*')
        ->where('id', $id )
        ->find_array();

    $app->view()->setData('vijest', $vijest[0]);
    $app->render('oneNews');
});

$app->view()->setData('basePageURL', $app->urlFor('basePage') );

//let Slim work its magic
$app->run();
