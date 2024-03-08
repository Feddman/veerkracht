<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            //Lichaamfuncties  
    Question::create([
        'title' => 'Ik voel mij gezond.',
        'category' => 'Lichaamfuncties'
    ]);
    Question::create([
        'title' => 'Ik voel mij fit.',
        'category' => 'Lichaamfuncties'
    ]);
    Question::create([
        'title' => 'Ik heb geen klachten en pijn.',
        'category' => 'Lichaamfuncties'
    ]);
    Question::create([
        'title' => 'Ik slaap goed.',
        'category' => 'Lichaamfuncties'
    ]);
    Question::create([
        'title' => 'Ik eet goed.',
        'category' => 'Lichaamfuncties'
    ]);
    Question::create([
        'title' => 'Ik ben tevreden over mijn seksualiteit.',
        'category' => 'Lichaamfuncties'
    ]);
    Question::create([
        'title' => 'Ik herstel snel na inspanning. Bijvoorbeeld na het sporten.',
        'category' => 'Lichaamfuncties'
    ]);
    Question::create([
        'title' => 'Ik kan makkelijk bewegen. Bijvoorbeeld traplopen, wandelen of fietsen.',
        'category' => 'Lichaamfuncties'
    ]);

    //Mentaal welbevinden
    Question::create([
        'title' => 'Ik kan dingen goed onthouden.',
        'category' => 'Mentaal welbevinden'
    ]);
    Question::create([
        'title' => 'Ik kan mij goed concetreren.',
        'category' => 'Mentaal welbevinden'
    ]);
    Question::create([
        'title' => 'Ik kan zien, horen, praten en lezen.',
        'category' => 'Mentaal welbevinden'
    ]);
    Question::create([
        'title' => 'Ik voel mij vrolijk.',
        'category' => 'Mentaal welbevinden'
    ]);
    Question::create([
        'title' => 'Ik accepteer mijzelf zoals ik ben.',
        'category' => 'Mentaal welbevinden'
    ]);
    Question::create([
        'title' => 'Ik zoek naar oplossingen om moeilijke situaties te veranderen.',
        'category' => 'Mentaal welbevinden'
    ]);
    Question::create([
        'title' => 'Ik heb controle over mijn leven.',
        'category' => 'Mentaal welbevinden'
    ]);

    //Zingeving
    Question::create([
        'title' => 'Ik heb een zinvol lezen.',
        'category' => 'Zingeving'
    ]);
    Question::create([
        'title' => 'Ik heb smorgens zin in de dag.',
        'category' => 'Zingeving'
    ]);
    Question::create([
        'title' => 'Ik heb idealen die ik graag wil bereiken.',
        'category' => 'Zingeving'
    ]);
    Question::create([
        'title' => 'Ik heb vertrouwen in mijn eigen toekomst.',
        'category' => 'Zingeving'
    ]);
    Question::create([
        'title' => 'Ik heb het leven zoals het komt.',
        'category' => 'Zingeving'
    ]);
    Question::create([
        'title' => 'Ik ben dankbaar voor wat het leven mij brengt.',
        'category' => 'Zingeving'
    ]);
    Question::create([
        'title' => 'Ik wil mijn hele leven blijven leren.',
        'category' => 'Zingeving'
    ]);

    //Kwaliteit van leven
    Question::create([
        'title' => 'Ik geniet van mijn leven.',
        'category' => 'Kwaliteit van leven'
    ]);
    Question::create([
        'title' => 'Ik ben gelukkig',
        'category' => 'Kwaliteit van leven'
    ]);
    Question::create([
        'title' => 'Ik zit lekker in mijn vel.',
        'category' => 'Kwaliteit van leven'
    ]);
    Question::create([
        'title' => 'Ik ervaar evenwicht in mijn leven.',
        'category' => 'Kwaliteit van leven'
    ]);
    Question::create([
        'title' => 'Ik voel mij veilig.',
        'category' => 'Kwaliteit van leven'
    ]);
    Question::create([
        'title' => 'Ik ben tevreden over mijn interginiteit in mijn leven.',
        'category' => 'Kwaliteit van leven'
    ]);
    Question::create([
        'title' => 'Ik ben tevreden over waar ik woon en met wie.',
        'category' => 'Kwaliteit van leven'
    ]);
    Question::create([
        'title' => 'Ik heb genoeg geld om mijn rekeningen te betalen.',
        'category' => 'Kwaliteit van leven'
    ]);


    //Meedoen
    Question::create([
        'title' => 'Ik heb goed contact met andere mensen.',
        'category' => 'Meedoen'
    ]);
    Question::create([
        'title' => 'Andere mensen nemen mij serieus.',
        'category' => 'Meedoen'
    ]);
    Question::create([
        'title' => 'Ik heb mensen met wie ik leuke dingen kan doen.',
        'category' => 'Meedoen'
    ]);
    Question::create([
        'title' => 'Ik heb mensen die mij steunen als dat nodig is.',
        'category' => 'Meedoen'
    ]);
    Question::create([
        'title' => 'Ik heb het gevoel dat ik erbij hoor in mijn omgeving.',
        'category' => 'Meedoen'
    ]);
    Question::create([
        'title' => 'Ik heb werk of andere bezigheden die ik zinvol vindt.',
        'category' => 'Meedoen'
    ]);
    Question::create([
        'title' => 'Ik ben geïnteresseerd in wat er in de maatschapij gebeurd.',
        'category' => 'Meedoen'
    ]);


    //Dagelijks functioneren
    Question::create([
        'title' => 'Ik kan goed voor mijzelf zorgen. Bijvoorbeeld wassen, aankleden, bootschappen doen en koken.',
        'category' => 'Dagelijks functioneren'
    ]);
    Question::create([
        'title' => 'Ik weet wat ik wel en niet kan doen.',
        'category' => 'Dagelijks functioneren'
    ]);
    Question::create([
        'title' => 'Ik weet hoe ik mijn gezondheid kan verzorgen.',
        'category' => 'Dagelijks functioneren'
    ]);
    Question::create([
        'title' => 'Ik kan goed plannen wat ik op een dag moet doen.',
        'category' => 'Dagelijks functioneren'
    ]);
    Question::create([
        'title' => 'Ik kan goed om gaan met het geld dat ik elke maand ontvang.',
        'category' => 'Dagelijks functioneren'
    ]);
    Question::create([
        'title' => 'Ik kan werken of vrijwillegerswerk doen.',
        'category' => 'Dagelijks functioneren'
    ]);
    Question::create([
        'title' => 'Ik weet hoe ik zonodig hulp kan krijgen van officiele instanties.',
        'category' => 'Dagelijks functioneren'
    ]);
    }
}
