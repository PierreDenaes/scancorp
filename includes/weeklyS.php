
    <div class="surveyMbi overflow-auto">
    <h1 class="mt-2 mb-3 text-center text-custom2">Questionnaire Suivi Bien &ecirc;tre</h1>
    <h4 class="mt-2 mb-3 text-center">Comment vous sentez vous au quotidien ?</h4>
    <div class="questions">
      <form method="post" action="">
        <fieldset class="fieldset-fieldset">
          <legend class="fieldset-legend">Sommeil</legend>
          <p class="pBold">Avant d'&eacute;valuer la qualit&eacute; de votre sommeil, posez vous les questions suivantes:</p>
          <p>Avez vous des insomnies :</p>
          <ul>
            <li>Avant de dormir?</li>
            <li>Pendant la nuit?</li>
          </ul>
          <p>Vous levez vous pendant la nuit, ce peut &ecirc;tre pour:</p>
          <ul>
            <li>Aller manger</li>
            <li>Fumer</li>
            <li>Aller aux toilettes</li>
          </ul>
          <p>Vous r&eacute;veillez vous en forme ou fatigu&eacute; le matin?</p>
          <p>Avez-vous du mal &agrave; vous r&eacute;veiller? </p>
          <p>En moyenne combien de temps dormez-vous par nuit?</p>
          <label for="Question1">
           - Sur une &eacute;chelle de 1 &agrave; 10 comment dormez-vous?
    	</label>
          <form>
            <div class="form-group alignSmiley">
              <label for="formControlRange"></label>
              <p class="alignSmiley"><img class="alignSmiley-smiley" src="images/smiley_hun.png" alt="smiley">
                <img class="alignSmiley-smiley" src="images/smiley_n.png" alt="smiley">
                <img class="alignSmiley-smiley" src="images/smiley_happ.png" alt="smiley"></p>
              <input type="range" id="myRange1" min="0" max="10" style="width:200px;">
            </div>
            <p class="alignSmiley">Valeur: <span id="demo1"></span></p>
          </form>
        </fieldset>

        <fieldset class="fieldset-fieldset">
          <legend class="fieldset-legend">Stress</legend>
          <p class="pBold">Avant d'&eacute;valuer votre taux de stress, posez vous les questions suivantes:</p>
          <p>Vous arrive t'il:</p>
          <ul>
            <li>D'&ecirc;tre irritable?</li>
            <li>De faire des mouvments brusques?</li>
            <li>De cumuler les erreurs?</li>
            <li>D'avoir des r&eacute;actions disproportionn&eacute;es ?</li>
            <li>D'&ecirc;tre tendu?</li>
            <li>De transpirer alors qu'il ne fait pas chaud ?</li>
            <li>D'avoir de noeuds &agrave; l'estomac ?</li>
          </ul>
          <label for="Question2">
           - Sur une &eacute;chelle de 1 &agrave; 10 quel est votre niveau de stress (10 &eacute;tant insupportable)
           </label>
          <form>
            <div class="form-group alignSmiley">
              <label for="formControlRange"></label>
              <p><img class="alignSmiley-smiley" src="images/smiley_hun.png" alt="smiley">
                <img class="alignSmiley-smiley" src="images/smiley_n.png" alt="smiley">
                <img class="alignSmiley-smiley" src="images/smiley_happ.png" alt="smiley"></p>
              <input type="range" id="myRange2" min="0" max="10" style="width:200px;">
            </div>
            <p class="alignSmiley">Valeur: <span id="demo2"></span></p>
          </form>
        </fieldset>

        <fieldset class="fieldset-fieldset">
          <legend class="fieldset-legend">Anxiet&eacute;</legend>
          <p class="pBold">Avant d'&eacute;valuer votre taux de anxiet&eacute;, posez vous les questions suivantes. Vous arrive t'il d'avoir :</p>
          <ul>
            <li>Des douleurs musculaires ?</li>
            <li>Des palpitations ?</li>
            <li>Des tremblements ?</li>
            <li>Les mains moites ?</li>
            <li>Des vertiges ?</li>
            <li>Des frissons ?</li>
            <li>Des maux de t&ecirc;te ?</li>
            <li>Une sensation de serrement au niveau de la poitrine, l'impression d'&eacute;touffer?</li>
          </ul>
          <label for="Question3">
           - Sur une &eacute;chelle de 1 &agrave; 10 quel est votre niveau d’anxi&eacute;t&eacute; (10 &eacute;tant insupportable)
           </label>
          <form>
            <div class="form-group alignSmiley">
              <label for="formControlRange"></label>
              <p><img class="alignSmiley-smiley" src="images/smiley_hun.png" alt="smiley">
                <img class="alignSmiley-smiley" src="images/smiley_n.png" alt="smiley">
                <img class="alignSmiley-smiley" src="images/smiley_happ.png" alt="smiley"></p>
              <input type="range" id="myRange3" min="0" max="10" style="width:200px;">
            </div>
            <p class="alignSmiley">Valeur: <span id="demo3"></span></p>
          </form>
        </fieldset>
        <fieldset class="fieldset-fieldset">
          <legend class="fieldset-legend">Energie</legend>

          <label for="Question4">
           - Sur une &eacute;chelle de 1 &agrave; 10 quel est votre niveau de vitalit&eacute;.
      </label>
          <form>
            <div class="form-group alignSmiley">
              <label for="formControlRange"></label>
              <p><img class="alignSmiley-smiley" src="images/smiley_hun.png" alt="smiley">
                <img class="alignSmiley-smiley" src="images/smiley_n.png" alt="smiley">
                <img class="alignSmiley-smiley" src="images/smiley_happ.png" alt="smiley"></p>
              <input type="range" id="myRange4" min="0" max="10" style="width:200px;">
            </div>
            <p class="alignSmiley">Valeur: <span id="demo4"></span></p>
          </form>
        </fieldset>
        <fieldset class="fieldset-fieldset">
          <legend class="fieldset-legend">Digestion</legend>
          <p class="pBold">Avant d'&eacute;valuer la qualit&eacute; de votre transit, posez vous les questions suivantes. Souffrez vous de :</p>
          <ul>
            <li>Reflux gastriques ?</li>
            <li>Ballonnements ?</li>
            <li>Constipation ?</li>
            <li>Remont&eacute;es acides ?</li>
            <li>diarrh&eacute;e ?</li>
          </ul>
          <label for="Question5">
           - Sur une &eacute;chelle de 1 &agrave; 10 comment &eacute;valuez-vous votre digestion
           </label>
          <form>
            <div class="form-group alignSmiley">
              <label for="formControlRange"></label>
              <p><img class="alignSmiley-smiley" src="images/smiley_hun.png" alt="smiley">
                <img class="alignSmiley-smiley" src="images/smiley_n.png" alt="smiley">
                <img class="alignSmiley-smiley" src="images/smiley_happ.png" alt="smiley"></p>
              <input type="range" id="myRange5" min="0" max="10" style="width:200px;">
            </div>
            <p class="alignSmiley">Valeur: <span id="demo5"></span></p>
          </form>
        </fieldset>
        <button type="submit" class="btn btn-custom btnQuestion d-block" name="submitWeekly">Submit</button>
      </form>
    </div>
    </div>
