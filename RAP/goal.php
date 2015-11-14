<!doctype html>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->

<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->

<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->

<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->

    <head>

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title></title>

        <meta name="description" content="">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">



        <link rel="stylesheet" href="css/bootstrap.min.css">

        <style>

            body {

                padding-top: 50px;

                padding-bottom: 20px;

            }

#containerVid {

}

#videoElement {

    width: 400px;

    height: 325px;

    background-color: #666;

}

#signBox{

width: 400px;

height: 375px;

background-color: red;

}

.displayStyle{



}

        </style>

        <link rel="stylesheet" href="css/bootstrap-theme.min.css">

        <link rel="stylesheet" href="css/main.css">



        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

    </head>

    <body>

        <!--[if lt IE 8]>

            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>

        <![endif]-->

    <?php include "inc/nav.inc"; ?><div class="container">
<p>
</p>
<div class="panel panel-success">
<div class="panel-heading">Our Proposal</div>

<h2 class="bg-warning">Problem Statement and Proposed Solution</h2>
<p>RapBot is a application that uses google web speech to listen to your raps and suggest words that rhyme in order to assist and inspire the artist from rappers to poets to songwriters.</p>

<h2 class="bg-warning">Requirements for Solution</h2>
<p>Allows users to find their rhyme in real-time and be able to gain familiarity with the artistic medium of rap. This program will entice beginners or those who are not experienced with the medium with a fun, easy to use program. It is basically a way for these users to build a foundation in the art.</p>

<p>The interface will allow the user to hit a key at the end of each spoken line and will then display several rhyming words so that the context of the user’s next line is easier to generate. The presentation of rhymes will be obvious, easy to read, and quick to generate. We will be using javascript to generate the rhyme list, HTML and CSS will be used to design the website. </p>

<p>Any additional requirements will be determined from user testing with experienced to novice rappers.</p>

<h2 class="bg-warning">Needfinding</h2>

<h3>Background Research</h3>
<p>There are rhyme dictionaries, poets journals that come with rhyme look up feature, as well as children's apps that help with rhyming but none of these include a speech synthesis component. There are no current web speech rap apps available. some examples can be seen below: 
https://play.google.com/store/apps/details?id=com.smule.autorap&hl=en
http://www.makeuseof.com/tag/4-iphone-applications-that-will-turn-you-into-a-rap-superstar/
https://itunes.apple.com/US/app/id488313870?mt=8
https://www.indiegogo.com/projects/rhyme-coach-the-learn-to-rap-app#/</p>

<h3>Interviews:</h3>
<p>For some expert opinions, we will interview at least 5 people who have experience in writing and performing their own raps to determine what capabilities they would like to see in a rap application. We currently have a phase 1 application with a simple UI which we will show to users. We will observe the user experience and ask the user questions to assess their experience to determine what the user would like to see in the next iteration. </p>

<h3>Surveys:</h3>

<p>After feedback is collected from expert users, we will provide a public link to our 2nd prototype for anonymous users to test. This round of anonymous testing will include a follow up short survey where users will provide their input and rate the app. This survey will be distributed through social media outlets.</p> 

<h3>Analysis:</h3>

<p>The feedback from expert uses will be interpreted by 2 people in our team and a summary of interview results will be provided. We will use our finding from this round of needfinding to better inform our public surveys. The public survey evaluation will include a graphical analysis and discussion of  the results.</p>

<h2 class="bg-warning">Design</h2>

<p>Phase 1: Prototype </p>

<p>The design of our interface is going to be a window that listens for the users rap, and then generates an array of words that rhyme with the last word upon the hitting the shift key at the end of each line. This way, the user can continue his or her rap instantly choosing one of the many options displayed without having to think about the contents of the next line. A potential feature that we are considering is the ability to play beats while using the rapbot.</p>

<h2 class="bg-warning">Evaluation</h2>

<p>Acquiring Participants: </p>

<p>We personally have several rap contacts on call so access to lead users are not going to be a problem. We also plan to post the project on a university page in order to get large quantities of feedback. Each user will complete a quick culture context survey so we can organize results and feedback in a useful way. </p>

<p>Phase 1 prototype:</p>

<p>Include proof of concept. Currently it is a basic application where the participant uses the Google Speech API to record their raps. When the user reaches the word that they want to rhyme with they pause speech recognition by pressing the shift key and a list of rhyming words will be displayed in separate box below. The specific number of works to be displayed will be determined through user testing.</p>

Phase 2 prototype:

<p>This prototype will include a more polished version of the application including the interview need finding feedback. Currently we envision functions such as being able to add sound you wish to rap to and creating a more appealing user interface. This prototype will be released for public evaluation.</p>

<p>Final prototype:</p>

<p>This final prototype will use all needfinding information to create a final prototype with a superior user interface incorporating changes based on the surveys and expert opinions. We hope to perfect the format in which the user wants their raps displayed, the user experience, and the additional features that can increase utility for the user.</p>

<h2 class="bg-warning">Timeline and Deliverables:</h2>

<p>Proposal - Due November 4, 2015</p>
<p>Group Meeting - October 16, 2015</p>
<p>Timeline</p>
<p>Wireframe</p>
<p>Implementation</p>
<p>Deliverables</p>
<p>Evaluation</p>

<h4 class="bg-danger">Phase 1 Testing - Due November 6, 2015</h4>
<p>Familiarize ourselves with the Phase 1 prototype and the logistics of making it functional</p>
<p>Key areas to learn:</p>
<p>Familiarize ourselves with JavaScript</p>
<p>Familiarize ourselves with the rhyming software API we are using (RhymeBrain.com API)</p>
<p>Perform testing with experienced rappers as described in needfinding: interviews.
Questions to ask</p>
<p>How easy is this application to use?</p>
<p>Does this application make it easier to come up with rhymes for raps?</p>
<p>How is the aesthetic appearance of UI?</p>
<p>Are the rhyme words presented in an easy to see access?</p>
<p>Are the number of rhyme words easy to read and sort between in a timely fashion?</p>
<p>Are the there enough, too many, or just right amount of rhyming words?</p>
<p>Is the pause function easy to use, and quick to respond?</p>
<p>Are there any improvements that should be made to the saving of raps?</p>
<p>Any further suggestions?</p>

<h4 class="bg-danger">Rapbot Website - Due November 6, 2015</h4>
<p>Website should have “About” page with information about program and creators.</p>
<p>Website will have the concept video on the front page to advertise the application use.</p>
<p>Website will have project timeline that will be updated as goals are reached.</p>

<h4 class="bg-danger">Concept Video - Due November 8th, 2015</h4>


<h4 class="bg-danger">Phase 2 Prototype Creation - Due November 13, 2015</h4>
<p>UI updates as well as expert user additions will be added to develop a Phase 2 prototype.</p>

<h4 class="bg-danger">Phase 2 Testing - November 13-20 , 2015</h4>
<p>Beta testing will be done as described in the needfinding: analysis and survey sections.</p>
<p>Testing results and analysis</p>

<h4 class="bg-danger">Final Prototype - Due November 23, 2015</h4>
<p>Working program</p>
<p>Planned Improvements from Phase 2 Testing</p>

</div>

      <footer>

        <p>&copy; ASL Learning, LLC 2015</p>

      </footer>

    </div> <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>



        <script src="js/vendor/bootstrap.min.js"></script>



        <script src="js/main.js"></script>

    </body>

</html>





