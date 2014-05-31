<?php
/**
 * Created by PhpStorm.
 * User: Gab
 * Date: 30/05/14
 * Time: 18:00
 */

class Test extends PHPUnit_Framework_TestCase {


    public function testficheclub()
    {

        nom n = new nom ("PSG") ;
        ville v = new ville ( " Paris");
        nomdirigeant nd = new nomdirigeant ("Guillaume");
        Assert.assertTrue ("Echec", n.ficheclub("FC-Metz")=="false");
        Assert.assertTrue ("Echec", v.ficheclub("Lyon")=="false");
        Assert.assertTrue ("Echec", nd.ficheclub("Guy")=="true");

    }
}
 