<?php

namespace App\Http\Controllers;

use App\APropo;
use App\Carousel;
use App\Front;
use App\Media;
use App\MediaObject;
use App\MessageBienvenu;
use App\Produit;
use App\Service;
use App\Icon;
use App\Contact;
use App\Coordonee;
use App\ServiceIntro;
use App\Technologie;
use App\CarouselCitation;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function home()
    {
        $apropos = APropo::all()->first();
        $serviceIntro = ServiceIntro::all()->first();
        $technologies = Technologie::all();
        $produits = Produit::all();
        $services = Service::all();
        $messagebienvenu  = MessageBienvenu::all()->first();
        $carousel = Carousel::all();
        $icons = Icon::orderBy('created_at','desc')->get();
        $contact = Contact::all()->first();
        $coordonee = Coordonee::all()->first();
        $citation = CarouselCitation::all();

        defaultLog(Front::class);
        return view('home',
                    compact(
                        'apropos',
                        'serviceIntro',
                        'technologies',
                        'produits',
                        'services',
                        'carousel',
                        'messagebienvenu',
                        'icons',
                        'contact',
                        'coordonee',
                        'citation'
                    ));
    }


    public function apropos()
    {
        $apropos = APropo::all()->first();
        $technologies = Technologie::all();
        $contact = Contact::all()->first();
        $coordonee = Coordonee::all()->first();
        $icons = Icon::orderBy('created_at','desc')->get();
        $citation = CarouselCitation::all();

        createLog('Consultation','Ouverture de la page a propos');

        return view('about',
            compact('apropos', 'technologies',
            'icons',
            'contact',
            'coordonee',
            'citation'));
    }


    public function service()
    {

        $produits = Produit::all();
        $services = Service::all();
        $contact = Contact::all()->first();
        $coordonee = Coordonee::all()->first();
        $icons = Icon::orderBy('created_at','desc')->get();
        $citation = CarouselCitation::all();

        createLog('Consultation','Ouverture de la page services et produits');

        return view('service',
            compact('produits', 'services',
            'icons',
            'contact',
            'coordonee',
            'citation'));
    }




    public function serviceFindDetail(Request $request,$slug)
    {
        $get_one =Service::all()->where('slug',$slug)
            ->first()
            ->get();
        if ($request->has('slug'))    {

            createLog('Consultation avec succes','détail produits '.$get_one->nom.' num  : '.$get_one->id );
            return  view('detail_service',compact('get_one'));
        }

        createLog('Consultation echec','détail produits '.$get_one->nom.' num  : '.$get_one->id );

        return view('page_not_found');
    }
    public function contact()
    {
        $contact = Contact::all()->first();
        $coordonee = Coordonee::all()->first();
        $icons = Icon::orderBy('created_at','desc')->get();
        $citation = CarouselCitation::all();

        createLog('Consultation','Ouverture de la page messagecontact');


        return view('contact',compact(
        'icons',
        'contact',
        'coordonee',
        'citation'));
    }

    public function getPicture()
    {

        $carousel = Carousel::findOrFail(1);

        dd($carousel);
    }
}
