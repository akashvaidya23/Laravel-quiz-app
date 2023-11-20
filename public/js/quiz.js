let string_questions = document.getElementById("hidden_questions").value.trim();
let hidden_questions = JSON.parse(string_questions);
let user_id = document.getElementById("user_id").value;

let question_count = 0;
let points = 0;
let total_questions = hidden_questions.length;
let timerInt;

window.onload = function () {
    show(question_count);
    createSteps(total_questions);
    document.getElementById("score").innerHTML = points;
};

function createSteps(steps) {
    let stepList = document.getElementById("stepList");
    for (let i = 0; i < steps; i++) {
        const node = document.createElement("span");
        stepList.appendChild(node);
    }
    document.getElementById("totalQs").innerHTML = steps;
}

function timer() {
    var sec = 15;
    timerInt = setInterval(function () {
        // console.log('timer called')
        document.getElementById("timer").innerHTML = "0:" + sec;
        sec--;
        if (sec < 0) {
            clearInterval(timerInt);
            next();
        }
    }, 1000);
}

function show(count) {
    document.getElementById("attemptedQs").innerHTML = question_count + 1;
    // setTimer
    timer();

    let question = document.getElementById("questions");
    let [first, second, third, fourth] = hidden_questions[count].options;

    question.innerHTML = `<h6 class='mt-2'>Q${count + 1}.  ${
        hidden_questions[count].question
    }</h6>
      <ul class="option_group">
      <li class="option" data-optionid=${first.id}>${first.option}</li>
      <li class="option" data-optionid=${second.id}>${second.option}</li>
      <li class="option" data-optionid=${third.id}>${third.option}</li>
      <li class="option" data-optionid=${fourth.id}>${fourth.option}</li>
      </ul>`;

    toggleActive();
}

function toggleActive() {
    let option = document.querySelectorAll("li.option");
    let nextBtn = document.getElementById("btn-next");
    nextBtn.disabled = true;
    for (let i = 0; i < option.length; i++) {
        option[i].onclick = function () {
            for (let i = 0; i < option.length; i++) {
                if (option[i].classList.contains("active")) {
                    option[i].classList.remove("active");
                }
            }
            option[i].classList.add("active");
            nextBtn.disabled = false;
        };
    }
}

function next() {
    window.clearInterval(timerInt);
    console.log(question_count, hidden_questions.length);
    if (question_count == hidden_questions.length - 1) {
        // alert("last_question 1");
        let user_answer = document.querySelector("li.option.active");
        let selected_option = user_answer
            ? user_answer.getAttribute("data-optionid")
            : null;
        user_answer = user_answer ? user_answer.innerHTML : null;

        let currentQuestion = hidden_questions[question_count];
        let currentQuestionId = currentQuestion.id;

        let options = currentQuestion.options;
        let correct_answer = options.find((option) => {
            return option.option == user_answer;
        });

        let question_score = 0;
        if (user_answer && correct_answer.correct == 1) {
            question_score = 1;
            points += 1;
            sessionStorage.setItem("points", points);
            document.getElementById("score").innerHTML = points;
            document.getElementById("total_score").value = points;
        }
        // question_count++;
        // show(question_count);
        let data = {
            user_id,
            question_id: currentQuestionId,
            answer_id: selected_option,
            is_correct: question_score ? 1 : 0,
            question_score,
        };

        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });

        $.ajax({
            url: "/add/Score",
            type: "POST",
            data: data,
            success: function (response) {},
        });
        location.href = `/end-Quiz/${points}`;
    } else if (question_count == hidden_questions.length - 2) {
        // alert("last_question 2");
        let nextBtn = document.getElementById("btn-next");
        nextBtn.innerHTML = "Submit";
    }

    let steps = document.querySelectorAll("#stepList span");
    steps[question_count + 1].classList.add("current");
    steps[question_count].classList.add("done");

    let user_answer = document.querySelector("li.option.active");
    let selected_option = user_answer
        ? user_answer.getAttribute("data-optionid")
        : null;
    user_answer = user_answer ? user_answer.innerHTML : null;

    let currentQuestion = hidden_questions[question_count];
    let currentQuestionId = currentQuestion.id;

    let options = currentQuestion.options;
    let correct_answer = options.find((option) => {
        return option.option == user_answer;
    });

    let question_score = 0;
    if (user_answer && correct_answer.correct == 1) {
        question_score = 1;
        points += 1;
        sessionStorage.setItem("points", points);
        document.getElementById("score").innerHTML = points;
        document.getElementById("total_score").value = points;
    }
    question_count++;
    show(question_count);
    let data = {
        user_id,
        question_id: currentQuestionId,
        answer_id: selected_option,
        is_correct: question_score ? 1 : 0,
        question_score,
    };

    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    $.ajax({
        url: "/add/Score",
        type: "POST",
        data: data,
        success: function (response) {},
    });
}
