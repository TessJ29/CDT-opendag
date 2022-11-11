<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="../public/scss/main.css">

    <title>Document</title>

</head>

<body>
    <?php $this->view("partials/navbar"); ?>
    <section class="banner">
        <div class="banner">
            <h1>MBO Utrecht opendag vragenlijst</h1>
            <h5>Een aantal vragen over hoe u de open dag heeft ervaren.</h5>
        </div>
    </section>
    <form class="survey-form" action="/survey/update" method="post">
        <h1><i class="" far fa-list-alt></i>Vragen formulier</h1>
        <div class="steps">
            <div class="step current"></div>
            <div class="step"></div>
            <div class="step"></div>
            <div class="step"></div>
            <div class="step"></div>
            <div class="step"></div>
        </div>
        <div class="step-content current" data-step="1">
            <div class="fields">
                <p><?= $data['Question']; ?></p>
                <div class="rating">    
                    <input type="radio" name="Answer" id="radio1" value="Very Bad">
                    <label for="radio1">1</label>
                    <input type="radio" name="Answer" id="radio2" value="Bad">
                    <label for="radio2">2</label>
                    <input type="radio" name="Answer" id="radio3" value="Neutral">
                    <label for="radio3">3</label>
                    <input type="radio" name="Answer" id="radio4" value="Good">
                    <label for="radio4">4</label>
                    <input type="radio" name="Answer" id="radio5" value="Very Good">
                    <label for="radio5">5</label>
                </div>
                <div class="rating-footer">
                    <span>Heel slecht</span>
                    <span>Heel goed</span>
                </div>
            </div>
            <div class="buttons">
                <a href="#" class="btn" data-set-step="2">Volgende</a>
            </div>
        </div>
        <!-- Page 2 -->
        <div class="step-content" data-step="2">
            <div class="fields">
                <p>Was de gegeven informatie over de locatie duidelijk?</p>
                <div class="rating">
                    <input type="radio" name="Answer" id="radio6" value="Very Bad">
                    <label for="radio6">1</label>
                    <input type="radio" name="Answer" id="radio7" value="Bad">
                    <label for="radio7">2</label>
                    <input type="radio" name="Answer" id="radio8" value="Neutral">
                    <label for="radio8">3</label>
                    <input type="radio" name="Answer" id="radio9" value="Good">
                    <label for="radio9">4</label>
                    <input type="radio" name="Answer" id="radio10" value="Very Good">
                    <label for="radio10">5</label>
                </div>
                <div class="rating-footer">
                    <span>Heel slecht</span>
                    <span>Heel goed</span>
                </div>
            </div>
            <div class="buttons">
                <a href="#" class="btn alt" data-set-step="1">Vorige</a>
                <a href="#" class="btn" data-set-step="3">Volgende</a>
            </div>
        </div>
        <!-- page 3 -->
        <div class="step-content" data-step="3">
            <div class="fields">
                <p>Was de gegeven informatie duidelijk?</p>
                <div class="rating">
                    <input type="radio" name="Answer" id="radio11" value="Very Bad">
                    <label for="radio11">1</label>
                    <input type="radio" name="Answer" id="radio12" value="Bad">
                    <label for="radio12">2</label>
                    <input type="radio" name="Answer" id="radio13" value="Neutral">
                    <label for="radio13">3</label>
                    <input type="radio" name="Answer" id="radio14" value="Good">
                    <label for="radio14">4</label>
                    <input type="radio" name="Answer" id="radio15" value="Very Good">
                    <label for="radio15">5</label>
                </div>
                <div class="rating-footer">
                    <span>Heel slecht</span>
                    <span>Heel goed</span>
                </div>
            </div>
            <div class="buttons">
                <a href="#" class="btn alt" data-set-step="2">Vorige</a>
                <a href="#" class="btn" data-set-step="4">Volgende</a>
            </div>
        </div>
        <!-- Page 4 -->
        <div class="step-content" data-step="4">
            <div class="fields">
                <p>Bent u voldoende geinformeerd?</p>
                <div class="rating">
                    <input type="radio" name="Answer" id="radio16" value="Very Bad">
                    <label for="radio16">1</label>
                    <input type="radio" name="Answer" id="radio17" value="Bad">
                    <label for="radio17">2</label>
                    <input type="radio" name="Answer" id="radio18" value="Neutral">
                    <label for="radio18">3</label>
                    <input type="radio" name="Answer" id="radio19" value="Good">
                    <label for="radio19">4</label>
                    <input type="radio" name="Answer" id="radio20" value="Very Good">
                    <label for="radio20">5</label>
                </div>
                <div class="rating-footer">
                    <span>Helemaal niet</span>
                    <span>Helemaal wel</span>
                </div>
            </div>
            <div class="buttons">
                <a href="#" class="btn alt" data-set-step="3">Vorige</a>
                <a href="#" class="btn" data-set-step="5">Volgende</a>
            </div>
        </div>

        <!-- page 5 -->
        <div class="step-content" data-step="5">
            <div class="fields">
                <p>Heeft u wat gehad aan deze open dag?</p>
                <div class="rating">
                    <input type="radio" name="Answer" id="radio21" value="Very Bad">
                    <label for="radio21">1</label>
                    <input type="radio" name="Answer" id="radio22" value="Bad">
                    <label for="radio22">2</label>
                    <input type="radio" name="Answer" id="radio23" value="Neutral">
                    <label for="radio23">3</label>
                    <input type="radio" name="Answer" id="radio24" value="Good">
                    <label for="radio24">4</label>
                    <input type="radio" name="Answer" id="radio25" value="Very Good">
                    <label for="radio25">5</label>
                </div>
                <div class="rating-footer">
                    <span>Helemaal niet</span>
                    <span>Heel veel</span>
                </div>
            </div>
            <div class="buttons">
                <a href="#" class="btn alt" data-set-step="4">Vorige</a>
                <a href="#" class="btn" data-set-step="6">Volgende</a>
            </div>
        </div>
        <!-- page 6 -->
        <div class="step-content" data-step="6">
            <div class="text">
                <h4>Dit is het einde van de vragenlijst.</h4>
                <h5>Als u klaar bent met het invullen van het formulier, druk dan op versturen</h5>
            </div>
            <div class="buttons">
                <a href="#" class="btn alt" data-set-step="5">Prev</a>
                <input type="submit" class="btn" name="submit" value="Versturen">
            </div>
        </div>

    </form>
    <script>
        const setStep = step => {
            document.querySelectorAll(".step-content").forEach(element => element.style.display = "none");
            document.querySelector("[data-step='" + step + "']").style.display = "block";
            document.querySelectorAll(".steps .step").forEach((element, index) => {
                index < step - 1 ? element.classList.add("complete") : element.classList.remove("complete");
                index == step - 1 ? element.classList.add("current") : element.classList.remove("current");
            });
        };
        document.querySelectorAll("[data-set-step]").forEach(element => {
            element.onclick = event => {
                event.preventDefault();
                setStep(parseInt(element.dataset.setStep));
            };
        });
        <?php if (!empty($_POST)) : ?>
            setStep(4);
        <?php endif; ?>
    </script>
    <?php $this->view("partials/footer"); ?>

</body>

</html>