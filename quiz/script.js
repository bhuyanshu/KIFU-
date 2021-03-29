(function() {
    var questions = [{
      question: "ARE YOU UNDER 18 YEARS OLD?",
      choices: ['YES','NO'],
      correctAnswer: 1
    }, {
      question: "ARE YOU OVER 75 YEARS OLD?",
      choices: ['YES','NO'],
      correctAnswer: 1
    }, {
      question: "HAD A TATTOO IN THE LAST 4 MONTHS?",
      choices:  ['YES','NO'],
      correctAnswer: 1
    }, {
        question: "PREGNANT OR JUST GIVEN BIRTH?",
        choices: ['YES','NO'],
        correctAnswer: 1
    }, {
        question: "HAVE A HEART CONDITION?",
        choices: ['YES','NO'],
        correctAnswer: 1
    }, {
      question: "LOW IN IRON?",
      choices: ['YES','NO'],
      correctAnswer: 1
    }, {
        question: "ENGAGED IN 'AT RISK' SEXUAL ACTIVITY IN THE PAST 12 MONTHS?",
        choices: ['YES','NO'],
        correctAnswer: 1
    },{
        question: "INJECTED RECREATIONAL DRUGS IN THE PAST 5 YEARS?",
        choices: ['YES','NO'],
        correctAnswer: 1
    },{
        question: "GOING OVERSEAS IN THE 4 MONTHS BEFORE YOUR DONATION?",
        choices: ['YES','NO'],
        correctAnswer: 1
    },{
      question: "LIVED IN THE UK FOR A TOTAL OF 6 MONTHS OR MORE BETWEEN 1 JAN 1980 AND 31 DEC 1996?",
      choices: ['YES','NO'],
      correctAnswer: 1
    }];
    
    var questionCounter = 0; //Tracks question number
    var selections = []; //Array containing user choices
    var quiz = $('#quiz'); //Quiz div object
    
    // Display initial question
    displayNext();
    
    // Click handler for the 'next' button
    $('#next').on('click', function (e) {
      e.preventDefault();
      
      // Suspend click listener during fade animation
      if(quiz.is(':animated')) {        
        return false;
      }
      choose();
      
      // If no user selection, progress is stopped
      if (isNaN(selections[questionCounter])) {
        alert('Please make a selection!');
      } else {
        questionCounter++;
        displayNext();
      }
    });
    
    // Click handler for the 'prev' button
    $('#prev').on('click', function (e) {
      e.preventDefault();
      
      if(quiz.is(':animated')) {
        return false;
      }
      choose();
      questionCounter--;
      displayNext();
    });
    
    // Click handler for the 'Start Over' button
    $('#start').on('click', function (e) {
      e.preventDefault();
      
      if(quiz.is(':animated')) {
        return false;
      }
      questionCounter = 0;
      selections = [];
      displayNext();
      $('#start').hide();
    });
    
    // Animates buttons on hover
    $('.button').on('mouseenter', function () {
      $(this).addClass('active');
    });
    $('.button').on('mouseleave', function () {
      $(this).removeClass('active');
    });
    
    // Creates and returns the div that contains the questions and 
    // the answer selections
    function createQuestionElement(index) {
      var qElement = $('<div>', {
        id: 'question'
      });
      
      var header = $('<h2>Question ' + (index + 1) + ':</h2>');
      qElement.append(header);
      
      var question = $('<p>').append(questions[index].question);
      qElement.append(question);
      
      var radioButtons = createRadios(index);
      qElement.append(radioButtons);
      
      return qElement;
    }
    
    // Creates a list of the answer choices as radio inputs
    function createRadios(index) {
      var radioList = $('<ul>');
      var item;
      var input = '';
      for (var i = 0; i < questions[index].choices.length; i++) {
        item = $('<li>');
        input = '<input type="radio" name="answer" value=' + i + ' />';
        input += questions[index].choices[i];
        item.append(input);
        radioList.append(item);
      }
      return radioList;
    }
    
    // Reads the user selection and pushes the value to an array
    function choose() {
      selections[questionCounter] = +$('input[name="answer"]:checked').val();
    }
    
    // Displays next requested element
    function displayNext() {
      quiz.fadeOut(function() {
        $('#question').remove();
        
        if(questionCounter < questions.length){
          var nextQuestion = createQuestionElement(questionCounter);
          quiz.append(nextQuestion).fadeIn();
          if (!(isNaN(selections[questionCounter]))) {
            $('input[value='+selections[questionCounter]+']').prop('checked', true);
          }
          
          // Controls display of 'prev' button
          if(questionCounter === 1){
            $('#prev').show();
          } else if(questionCounter === 0){
            
            $('#prev').hide();
            $('#next').show();
          }
        }else {
          var scoreElem = displayScore();
          quiz.append(scoreElem).fadeIn();
          $('#next').hide();
          $('#prev').hide();
          $('#start').show();
        }
      });
    }
    
    // Computes score and returns a paragraph element to be displayed
    function displayScore() {
      var score = $('<p>',{id: 'question'});
      
      var numCorrect = 0;
      for (var i = 0; i < selections.length; i++) {
        if (selections[i] === questions[i].correctAnswer) {
          numCorrect++;
        }
      }
        if(numCorrect === 10){
            score.append('You are Eligible for donation '+'You got ' + numCorrect + ' questions out of ' +
                   questions.length + ' right!!!' +'  ' );
        }else{
            score.append('You are not Eligible :/');
        }
      return score;
    }
  })();