<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Faq::create([
            'question' => 'Wat doet dit?.',
            'answer' => 'Dit is een vragenlijst die inzicht geeft in de kwaliteit van leven van mensen met een beperking. Het is een hulpmiddel om te kijken hoe het gaat met iemand en waar ondersteuning nodig is.'
        ]);
    
        Faq::create([
            'question' => 'Waarom is dit nodig?',
            'answer' => 'Het is belangrijk om te weten hoe het gaat met mensen met een beperking. Zo kunnen we ondersteuning bieden waar dat nodig is.'
        ]);
    
        Faq::create([
            'question' => 'Hoe werkt dit?',
            'answer' => 'De vragenlijst bestaat uit 7 thema’s. Per thema zijn er 7 vragen. De vragen gaan over hoe het gaat met iemand. Bijvoorbeeld over gezondheid, meedoen en dagelijks functioneren.'
        ]);
    
        Faq::create([
            'question' => 'Wanneer is dit klaar?',
            'answer' => 'De vragenlijst is klaar als alle vragen zijn beantwoord. Dit duurt ongeveer 20 minuten.'
        ]);
    }
}
