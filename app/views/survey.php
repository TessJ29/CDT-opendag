<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="../public/scss/main.css">

    <title>MBO Utrecht</title>
</head>

<body>
    <?php $this->view("partials/navbar"); ?>

    <section class="banner">
        <div class="banner">
            <h1>MBO Utrecht opendag vragenlijst</h1>
            <h5>Een aantal vragen over hoe u de open dag heeft ervaren.</h5>
        </div>
    </section>
    <div class="survey-form">
        <h1><i class="" far fa-list-alt></i>Vragen formulier</h1>
        <div class="steps">
            <div class="step current"></div>
            <div class="step"></div>
            <div class="step"></div>
            <div class="step"></div>
            <div class="step"></div>
            <div class="step"></div>
            <div class="step"></div>
        </div>

        <div class="step-content current" data-step="1">
            <p>Zou u zo vriendelijk kunnen zijn deze enquête in te vullen?</p>
            <div class="buttons">
                <input type="submit" class="btn" data-set-step="2" value="Volgende">
            </div>
        </div>
        <!-- Data step page 2 -->
        <div class="step-content" data-step="2">
            <form class="survey-form" action="<?= URLROOT ?>/survey/create" method="post">
                <div class="fields">
                    <p>Hoe heeft u de open dag ervaren?</p>
                    <div class="rating">
                        <input type="radio" name="Answer" id="radio1" value="1">
                        <label for="radio1">1</label>
                        <input type="radio" name="Answer" id="radio2" value="2">
                        <label for="radio2">2</label>
                        <input type="radio" name="Answer" id="radio3" value="3">
                        <label for="radio3">3</label>
                        <input type="radio" name="Answer" id="radio4" value="4">
                        <label for="radio4">4</label>
                        <input type="radio" name="Answer" id="radio5" value="5">
                        <label for="radio5">5</label>
                    </div>
                    <div class="rating-footer">
                        <span>Heel slecht</span>
                        <span>Heel goed</span>
                    </div>
                </div>
                <div class="buttons">
                    <a href="#" class="btn-inv" data-set-step="2"></a>
                    <a href="#" class="btn" data-set-step="3">Volgende</a>
                </div>
        </div>
        <!-- Data step page 3 -->
        <div class="step-content" data-step="3">
            <div class="fields">
                <p>Was de gegeven informatie tijdens de open dag duidelijk?</p>
                <div class="rating">
                    <input type="radio" name="Answer2" id="radio6" value="1">
                    <label for="radio6">1</label>
                    <input type="radio" name="Answer2" id="radio7" value="2">
                    <label for="radio7">2</label>
                    <input type="radio" name="Answer2" id="radio8" value="3">
                    <label for="radio8">3</label>
                    <input type="radio" name="Answer2" id="radio9" value="4">
                    <label for="radio9">4</label>
                    <input type="radio" name="Answer2" id="radio10" value="5">
                    <label for="radio10">5</label>
                </div>
                <div class="rating-footer">
                    <span>Heel slecht</span>
                    <span>Heel goed</span>
                </div>
            </div>
            <div class="buttons">
                <a href="#" class="btn" data-set-step="2">Vorige</a>
                <a href="#" class="btn" data-set-step="4">Volgende</a>
            </div>
        </div>
        <!-- Data step page 4-->
        <div class="step-content" data-step="4">
            <div class="fields">
                <p>Was de gegeven informatie duidelijk?</p>
                <div class="rating">
                    <input type="radio" name="Answer3" id="radio11" value="1">
                    <label for="radio11">1</label>
                    <input type="radio" name="Answer3" id="radio12" value="2">
                    <label for="radio12">2</label>
                    <input type="radio" name="Answer3" id="radio13" value="3">
                    <label for="radio13">3</label>
                    <input type="radio" name="Answer3" id="radio14" value="4">
                    <label for="radio14">4</label>
                    <input type="radio" name="Answer3" id="radio15" value="5">
                    <label for="radio15">5</label>
                </div>
                <div class="rating-footer">
                    <span>Heel slecht</span>
                    <span>Heel goed</span>
                </div>
            </div>
            <div class="buttons">
                <a href="#" class="btn" data-set-step="3">Vorige</a>
                <a href="#" class="btn" data-set-step="5">Volgende</a>
            </div>
        </div>
        <!-- Data step page 5 -->
        <div class="step-content" data-step="5">
            <div class="fields">
                <p>Bent u voldoende geinformeerd?</p>
                <div class="rating">
                    <input type="radio" name="Answer4" id="radio16" value="1">
                    <label for="radio16">1</label>
                    <input type="radio" name="Answer4" id="radio17" value="2">
                    <label for="radio17">2</label>
                    <input type="radio" name="Answer4" id="radio18" value="3">
                    <label for="radio18">3</label>
                    <input type="radio" name="Answer4" id="radio19" value="4">
                    <label for="radio19">4</label>
                    <input type="radio" name="Answer4" id="radio20" value="5">
                    <label for="radio20">5</label>
                </div>
                <div class="rating-footer">
                    <span>Helemaal niet</span>
                    <span>Helemaal wel</span>
                </div>
            </div>
            <div class="buttons">
                <a href="#" class="btn" data-set-step="4">Vorige</a>
                <a href="#" class="btn" data-set-step="6">Volgende</a>
            </div>
        </div>

        <!-- data-step page 6 -->
        <div class="step-content" data-step="6">
            <div class="fields">
                <p>Heeft u wat gehad aan deze open dag?</p>
                <div class="rating">
                    <input type="radio" name="Answer5" id="radio21" value="1">
                    <label for="radio21">1</label>
                    <input type="radio" name="Answer5" id="radio22" value="2">
                    <label for="radio22">2</label>
                    <input type="radio" name="Answer5" id="radio23" value="3">
                    <label for="radio23">3</label>
                    <input type="radio" name="Answer5" id="radio24" value="4">
                    <label for="radio24">4</label>
                    <input type="radio" name="Answer5" id="radio25" value="5">
                    <label for="radio25">5</label>
                </div>
                <div class="rating-footer">
                    <span>Helemaal niet</span>
                    <span>Heel veel</span>
                </div>
            </div>
            <div class="buttons">
                <a href="#" class="btn" data-set-step="5">Vorige</a>
                <a href="#" class="btn" data-set-step="7">Volgende</a>
            </div>
        </div>
        <!-- Data step page 7 -->
        <div class="step-content" data-step="7">
            <div class="text">
                <h4>Dit is het einde van de vragenlijst.</h4>
                <h5>Als u klaar bent met het invullen van het formulier, druk dan op versturen</h5>
            </div>
            <div class="buttons">
                <a href="#" class="btn" data-set-step="6">Vorige</a>
                <input type="submit" value="Versturen">
            </div>
        </div>
    </div>
    </form>
    <script src="../../public/js/script.js"></script>

    <?php if (!empty($_POST)) : ?>
        setStep(4);
    <?php endif; ?>
    <?php $this->view("partials/footer"); ?>

</body>

</html>