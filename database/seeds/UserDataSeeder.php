<?php

use Illuminate\Database\Seeder;

class UserDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


      App\Role::create(
              [
                  'name' => "admin",
                  'description' => "the awesome admin dashboard wich provide you all access",
                  'slug' => 'this-is-the-first-admin-role'
      ]);



      App\Icon::create(
        [
            'nom' => 'Ion Facebook',
            'lien' =>'https://web.facebook.com/tmpgabon/',
            'faicon' =>'fa-facebook'
       ]);


       App\Icon::create(
        [
            'nom' => 'Ion LinkedIn',
            'lien' =>'https://www.linkedin.com/company/14031015',
            'faicon' =>'fa-linkedin'
       ]);

      App\APropo::create(
        [
             'titre' => 'TECHNO MEGA PARTNERS',
             'text' => 'TECHNO MEGA PARTNERS',
             'image' => 'TECHNO MEGA PARTNERS',
             'texte' => 'Créé en 2019, TMP "Techno Méga Partners " est un cabinet d’innovation multi technologique, qui alliant créativité et savoir faire, accompagne les entreprises dans leur transformation numérique. Nous avons une forte capacité d’adaptation de part la pluralité de notre équipe. Nous nous positionnons sur de nouveaux créneaux technologiques et relevons les challenges. L’amélioration de votre quotidien grâce à des solutions adaptées et innovantes est notre priorité. Nous regroupons des profils variés sur les domaines d’expertise suivants : Java, BigData, Web, Web Mobile, Intelligence Artificielle,'
     ]);

      App\User::create(
              [
                  'first_name' => 'John',
                  'middle_name' => 'Michael',
                  'last_name' => 'Doe',
                  'email' => 'darth@fake.io',
                  'password' => bcrypt('password'),
                  'username' => 'admin',
                  'role' => 1,
                  'statut' => true,
                  'remember_token' => 'adghhdyyyfkj8ds9e8ea8s9rrf6633qeeg',
                  'confirm_token' => 'ad87123yyyfkj8ds9e8ea8s9rrf6633qeeg',
                  'reset_token' => "adghhdyyyfkj8ds9e8ea8s9rrf6633qeeg",
                  'slug' => 'dominique-damba-maoundongone-2018'
              ]
      );
               App\MessageBienvenu::create(
                [
                    'message' => "Animés par la même passion, nous mettons toute notre détermination et notre
            expertise multi variée à apporter des solutions adéquates, simples qui bonifient
            votre quotidien. C’est notre ADN !"
                    ]);

               App\Contact::create([
                   'adresse' => 'BP 15004, Libreville, Estuaire',
                   'telephone' =>'+24106421212',
                   'email' =>'tmpartners_gabon@outlook.com'
               ]);

               App\Coordonee::create(
                   [
                       'nom' =>'Current Position', 'altitude' => '0.401408', 'longitude'=>'9.46176'
                   ]
               );

                App\CarouselCitation(
                  ['texte'=>"Encouragez l’innovation. Le changement est notre force vitale, la stagnation notre
glas", 'auteur' => 'David Ogilvy']
                );

                App\CarouselCitation(
                  ['texte'=>"L'innovation, c'est une situation qu'on choisit parce qu'on a une passion brûlante pour
quelque chose.", 'auteur' => 'Steve Jobs']
                );

    }
}
