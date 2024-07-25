<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use BotMan\BotMan\BotMan;
use App\Models\Sale;
use App\Models\Lease;
use Illuminate\Support\Facades\Storage;
use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\IncomingMessage;
use Illuminate\Support\Facades\Cache;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Outgoing\OutgoingMessage;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Attachments\ButtonTemplate;

class BotManController extends Controller
{
    public function handle(Request $request)
    {


// Reply to the user with the generated text

        $botman = app('botman');
       // Timeout in seconds
       $responses = [

        'who created you' => "I'm sorry, I'm just a bot. But I was created by humans.",
        'who are you' => "I'm your Real Estate bot.",
        'property' => 'Are you looking to buy, sell, or lease a property?',
        'buy' => 'Great! We have a variety of properties available for purchase. Would you like to see our listings?',
        'sell' => 'Are you looking to sell a property? Our team can assist you with that. Feel free to ask any questions you have.',


    ];

    // Handle predefined responses
    foreach ($responses as $keyword => $response) {
        $botman->hears($keyword, function (BotMan $bot) use ($response) {
            $bot->typesAndWaits(1);
            $bot->reply($response);
        });
    }
    //  dictionary


    $botman->hears(['How can your manpower company assist with my hiring needs'], function (BotMan $bot) {
        $bot->typesAndWaits(5);
        $bot->reply(' Our manpower company specializes in providing tailored staffing solutions to meet your specific hiring needs. We can assist you in the following ways');
        $bot->typesAndWaits(1);
        $bot->reply('Comprehensive Talent Pool: We have a vast database of pre-screened candidates with diverse skill sets and experience levels, ensuring you find the right fit for your requirements.');
        $bot->typesAndWaits(1);
        $bot->reply('Efficient Recruitment Process: Our team of experienced recruiters uses advanced technology and proven strategies to identify and attract top talent quickly and efficiently.');

        $bot->typesAndWaits(1);
        $bot->reply('Continuous Support: We offer ongoing support and follow-up to ensure that our placements meet your expectations and contribute positively to your organization.');
        $bot->typesAndWaits(1);
        $bot->reply('By partnering with our manpower company, you can streamline your hiring process, reduce time-to-hire, and gain access to high-quality candidates who can drive your business forward');
    });




    $botman->hears('forecast', function (BotMan $bot) {
        $bot->typesAndWaits(1);
        $bot->reply('Experts predict a surge in demand for commercial properties in the coming months
        The housing market is expected to stabilize after recent fluctuations.');
         $bot->typesAndWaits(1);
        $bot->reply('If you want to go back to the main menu, type "go back".');
    });








    $botman->hears('contact', function (BotMan $bot) {
        $bot->typesAndWaits(1);
        $bot->reply('You can reach out to us at abic.talentteams@gmail.com');
         $bot->typesAndWaits(1);
        $bot->reply('If you want to go back to the main menu, type "go back".');
    });



    $botman->hears(['hello', 'hey', 'hi'], function (BotMan $bot) {
        $bot->typesAndWaits(1);

        $question = Question::create('How can I help you today?')
        ->addButton(Button::create('View FAQs')->value('take tour'));


        $bot->reply($question);
    });

    $botman->hears(['thanks', 'thank you so much'], function (BotMan $bot) {
        $bot->typesAndWaits(1);
        $bot->reply('You\'re welcome! If you have any more questions, feel free to ask.');
    });
    $botman->hears(['Do you accept part-time employees'], function (BotMan $bot) {
        $bot->typesAndWaits(1);
        $bot->reply('We are looking for full-time employees that will support the clients operations/business..');
    });
    $botman->hears(['Do you accept applicants with tattoo'], function (BotMan $bot) {
        $bot->typesAndWaits(1);
        $bot->reply('Yes, we accept applicants with tattoos.');
    });
    $botman->hears(['Do you accept walk-ins'], function (BotMan $bot) {
        $bot->typesAndWaits(1);
        $bot->reply('Yes, you may visit our office located at Unit 403 Campos Rueda Bilding Urban Avenue, Pio Del Pilar, Makati City. Monday through Friday from 9:00 a.m. to 4:00 p.m.');
    });
    $botman->hears(['Office Hours'], function (BotMan $bot) {
        $bot->typesAndWaits(1);
        $bot->reply('We follow government working hours Monday through Friday at 8 a.m. to 5 p.m.');
    });
    $botman->hears(['Do you accept PWD'], function (BotMan $bot) {
        $bot->typesAndWaits(1);
        $bot->reply('Yes, we welcome and accommodate persons with disabilities (PWD).');
    });
    $botman->hears(['The work location of the jobs'], function (BotMan $bot) {
        $bot->typesAndWaits(1);
        $bot->reply('Luzon');
        $bot->typesAndWaits(1);
        $bot->reply('Visayas');
        $bot->typesAndWaits(1);
        $bot->reply('Mindanao');
    });
    $botman->hears('What types of manpower services we offer', function (BotMan $bot) {
        $bot->typesAndWaits(1);
        $bot->reply('We provide a comprehensive range of manpower services, including temporary staffing, permanent recruitment, and specialized talent acquisition for various industries. Whether you need short-term project support or long-term staffing solutions, we have you covered.');
    });
    $botman->hears('How do you ensure the quality of your candidates', function (BotMan $bot) {
        $bot->typesAndWaits(1);
        $bot->reply('Our rigorous screening and selection process includes background checks, skill assessments, and thorough interviews. We take pride in matching only the most qualified and reliable candidates to your specific needs.');
    });

    $botman->hears('goodbye', function (BotMan $bot) {
        $bot->typesAndWaits(1);
        $bot->reply('Goodbye! Have a great day.');
    });



    // Respond to inquiries about the company
    $botman->hears('company', function (BotMan $bot) {
        $bot->typesAndWaits(1);
        $bot->reply('Our company is dedicated to providing top-notch real estate services. If you have any specific questions, feel free to ask.');
         $bot->typesAndWaits(1);
        $bot->reply('If you want to go back to the main menu, type "go back".');
    });
    $botman->hears('How do you ensure the quality of your manpower services', function (BotMan $bot) {
        $bot->typesAndWaits(1);
        $bot->reply('We ensure the quality of our manpower services through a rigorous process that includes');
         $bot->typesAndWaits(1);
        $bot->reply('Thorough Screening: We conduct comprehensive background checks, skills assessments, and interviews to ensure each candidate meets our high standards.');
        $bot->typesAndWaits(1);
        $bot->reply('Training Programs: We offer continuous training and development programs to keep our personnel updated with the latest industry practices and skills.');
    });
    $botman->hears('Do you have an agency fee or any charge for processing', function (BotMan $bot) {
        $bot->typesAndWaits(1);
        $bot->reply('No, we are not charging any fees for the process during employment.');
    });
    $botman->hears('Age limit requirement', function (BotMan $bot) {
        $bot->typesAndWaits(1);
        $bot->reply('20 to 45 years old Male or Female (older than 45 are subject to screening depending on the experience and positions needed).');
    });
    $botman->hears('Is the medical expense covered by the company', function (BotMan $bot) {
        $bot->typesAndWaits(1);
        $bot->reply('No, the applicant will shoulder the medical expenses. The applicant can conduct his or her medicals at any clinic.');
    });
    $botman->hears('What are the pre-employment requirements', function (BotMan $bot) {
        $bot->typesAndWaits(1);
        $bot->reply('Here are the requirements needed!');
        $bot->typesAndWaits(1);
        $bot->reply("SSS E-1 Form and UMID ID<br>"
                  . "-Philhealth Number and ID<br>"
                  . "-Pag-Ibig Number and ID<br>"
                  . "-TIN Number and ID<br>"
                  . "-Latest 2X2 picture and 1x1 picture<br>"
                  . "-COE or Clearance Certificate<br>"
                  . "-School TOR or Diploma<br>"
                  . "-NBI (original)<br>"
                  . "-PSA or NSO <br>");
         $bot->typesAndWaits(1);
         $bot->reply('Pre-Employment Medical (original)');
         $bot->reply("-(Examination includes Urinalysis, Fecalysis, Physical Exam, X-Ray, CBC, Drug Test)<br>"
                  . "-Vaccination Card<br>");

        $bot->typesAndWaits(1);
        $bot->reply('For Makati based employees!');
        $bot->reply("-Sanitary/Health Permit
(Makati)<br>");

    });



    // Respond to expressions of interest in specific properties


    // Respond to requests for assistance
    $botman->hears('help', function (BotMan $bot) {
        $bot->typesAndWaits(1);
        $bot->reply('Sure, I\'m here to help. What do you need assistance with?');
    });

    // Check if the message is in the dictionary before the fallback
    $botman->hears('.*', function (BotMan $bot) {
        $message = strtolower($bot->getMessage()->getText());
        $bot->typesAndWaits(1);
        // $bot->reply("'$message' is not yet in my dictionary.");
    });


    $botman->hears('.*', function (BotMan $bot) {
        // Retrieve conversation messages from cache or initialize an empty array
        $conversationId = $bot->getMessage()->getConversationIdentifier();
        $messages = Cache::get('conversation_' . $conversationId, []);

        // Check if this is the start of a new conversation
        if (empty($messages) && $bot->getMessage()->getText() === 'take tour') {
            // Clear the conversation cache
            Cache::forget('conversation_' . $conversationId);
        }

        // Add the current message to the conversation transcript
        $messages[] = $bot->getMessage()->getText();

        // Update the cached conversation messages
        Cache::put('conversation_' . $conversationId, $messages, now()->addSeconds(30)); // Cache for 600 seconds (10 minutes)
        // Cache for 10 minutes
    });

    $botman->hears('Thank You', function (BotMan $bot) {
        // Reply to the user
        $bot->reply('You\'re welcome! If you have any more questions or need assistance, feel free to ask. (type "take tour" to get started)');
        $bot->typesAndWaits(1); // Simulate typing for 1 second

        // Retrieve conversation messages from cache
        $conversationId = $bot->getMessage()->getConversationIdentifier();
        $messages = Cache::get('conversation_' . $conversationId, []);

        // Serialize the messages into a string
        $transcript = implode("\n", $messages);

        // Generate a unique filename for the conversation transcript
        $fileName = 'conversation_' . $conversationId . '_summary.txt';

        // Save the transcript to a file
        Storage::disk('public')->put($fileName, $transcript);

        // Get the URL of the file
        $fileUrl = Storage::url($fileName);

        // Format the URL as a clickable link
        $linkText = '<a href="' . $fileUrl . '">Download Conversation Transcript</a>';

        // Send the link as a response
        $bot->reply('Here is the conversation transcript:');
        $bot->reply($linkText);
    });

  $botman->hears('take tour', function (BotMan $bot) {
    $bot->typesAndWaits(1);

    $question = Question::create('Frequently Ask Questions')
        ->addButton(Button::create('What are the pre-employment requirements?')->value('What are the pre-employment requirements'))
        ->addButton(Button::create('Age limit requirement?')->value('Age limit requirement'))
        ->addButton(Button::create('The work location of the jobs?')->value('The work location of the jobs'))
        ->addButton(Button::create('Do you accept part-time employees?')->value('Do you accept part-time employees'))
        ->addButton(Button::create('Do you accept PWD?')->value('Do you accept PWD'))
        ->addButton(Button::create('Do you accept applicants with tattoo?')->value('Do you accept applicants with tattoo'))
        ->addButton(Button::create('Do you accept walk-ins?')->value('Do you accept walk-ins'))
        ->addButton(Button::create('Office Hours?')->value('Office Hours'))
        ->addButton(Button::create('Is the medical expense covered by the company?')->value('Is the medical expense covered by the company'))
        ->addButton(Button::create('Do you have an agency fee or any charge for processing?')->value('Do you have an agency fee or any charge for processing'));
$bot->reply($question);

});
$botman->hears('go back', function (BotMan $bot) {
    $bot->typesAndWaits(1);

    $question = Question::create('Frequently Ask Questions?')
    ->addButton(Button::create('How can your manpower company assist with my hiring needs?')->value('How can your manpower company assist with my hiring needs'));

    $bot->reply($question);

});



$botman->fallback(function($bot) {
    $userMessage = $bot->getMessage()->getText();
    $usedWord = $this->getUsedWord($userMessage);
    if ($this->containsNegativeWords($userMessage)) {
        $bot->typesAndWaits(1);
        $bot->reply('I\'m sorry, did you mean "' . $usedWord . '"? If there\'s anything specific that\'s bothering you or that you\'d like assistance with, please let me know. I\'m here to help!');
    } elseif ($this->containsPositiveWords($userMessage)) {
        $bot->typesAndWaits(1);
        $bot->reply('That\'s great to hear! If there\'s anything specific you want to talk about or need assistance with, feel free to let me know.');
    } else {
        $bot->typesAndWaits(1);
        $bot->reply('I\'m sorry, I didn\'t understand "' . $usedWord . '".');
    }
});

$botman->listen();
}


    private function getUsedWord($message)
{
    $words = explode(' ', $message);
    // Return the first word used by the user
    return $words[0];
}
    private function containsNegativeWords($message)
    {
        $negativeWords = [
            'hate', 'bad','disrespect','tang ina mo','puta','panget', 'angry', 'frustrated', 'dislike', 'upset', 'fuck', 'sad', 'depressed', 'unhappy', 'miserable',
            'gloomy', 'sorrowful', 'despair', 'desperate', 'hopeless', 'dejected', 'grief', 'melancholy', 'regret',
            'disappointed', 'distressed', 'anguish', 'agony', 'resentful', 'annoyed', 'irritated', 'furious', 'enraged',
            'outraged', 'disgusted', 'repulsed', 'offended', 'insulted', 'humiliated', 'ashamed', 'guilty', 'embarrassed',
            'humiliated', 'ashamed', 'guilty', 'embarrassed', 'insecure', 'anxious', 'nervous', 'worried', 'fearful',
            'terrified', 'panicked', 'alarmed', 'scared', 'frightened', 'dismayed', 'shocked', 'traumatized', 'stressed'
        ];
        // Add more negative words as needed
        foreach ($negativeWords as $word) {
            if (stripos($message, $word) !== false) {
                return true;
            }
        }
        return false;
    }
    private function containsPositiveWords($message)
{
    $positiveWords = ['happy', 'joyful', 'excited', 'satisfied', 'love', 'fantastic', 'amazing', 'awesome', 'wonderful', 'excellent', 'great', 'superb', 'delighted', 'pleased', 'content', 'grateful', 'thrilled', 'ecstatic', 'overjoyed', 'blissful', 'admire', 'appreciate', 'commend', 'applaud', 'praise', 'stellar', 'fabulous', 'terrific', 'glad', 'eager', 'enthusiastic', 'radiant', 'smiling', 'vibrant', 'cheerful', 'upbeat', 'positive', 'inspired', 'motivated', 'energetic', 'dynamic', 'passionate', 'charming', 'kind', 'friendly', 'warm', 'welcoming'];
 // Add more positive words as needed
    foreach ($positiveWords as $word) {
        if (stripos($message, $word) !== false) {
            return true;
        }
    }
    return false;
}

}
