<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .section {
display: none;
}

.section.active{
display: block;
}

.invisible {
    display: none;
}

ul {
list-style: none;
margin:0;
padding: 0;
display: flex;
align-items: center;
}

ul li {
background: #ccc;
padding: 10px 15px;
margin-left: 6px;
border-radius: 50%;
cursor: pointer;
opacity: .5;
}

ul li.active{
opacity: 1 !important;
}

.next,
.previous {
padding: 15px 10px;
border-radius: 6px;
background: deepskyblue;
color: white;
border:0;
outline: none;
cursor: pointer;
width: 100px;
}

.next.disable,
.previous.disable{
  cursor: none;
  opacity: .5;
}
    </style>
</head>
<body>
<ul class="nav">
<li class="active" data-cont="r1">1</li>
<li data-cont="r2">2</li>
<li data-cont="r3">3</li>
</ul>


<section id="r1" class="section section-one active">
<h2>section 1</h2>
</section>
<section id="r2" class="section section-two">
<h2>section 2</h2>
</section>
<section id="r3" class="section section-three">
<h2>section 3</h2>
</section>


<button class="previous disable" id="previous">Previous</button>
<button class="next" id="next">Next</button>

<script>
    let currentSection = 0;
let sections = document.querySelectorAll(".section");
let sectionButtons = document.querySelectorAll(".nav > li");
let nextButton = document.querySelector(".next");
let previousButton = document.querySelector(".previous");
for (let i = 0; i < sectionButtons.length; i++) {
    sectionButtons[i].addEventListener("click", function() {
        sections[currentSection].classList.remove("active");
        sectionButtons[currentSection].classList.remove("active");
        sections[currentSection = i].classList.add("active");
        sectionButtons[currentSection].classList.add("active");
        if (i === 0) {
            if (previousButton.className.split(" ").indexOf("disable") < 0) {
                previousButton.classList.add("disable");
            }
        } else {
            if (previousButton.className.split(" ").indexOf("disable") >= 0) {
                previousButton.classList.remove("disable");
            }
        }
        if (i === sectionButtons.length - 1) {
            if (nextButton.className.split(" ").indexOf("disable") < 0) {
                nextButton.classList.add("disable");
            }
        } else {
            if (nextButton.className.split(" ").indexOf("disable") >= 0) {
                nextButton.classList.remove("disable");
            }
        }
    });
}

nextButton.addEventListener("click", function() {
    if (currentSection < sectionButtons.length - 1) {
        sectionButtons[currentSection + 1].click();
    }
});

previousButton.addEventListener("click", function() {
    if (currentSection > 0) {
        sectionButtons[currentSection - 1].click();
    }
});
</script>
</body>
</html>