<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
	crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/questionario.css">
    <title>Resilience Mind | Psicoterapia Online</title>
</head>

<body>
	<div id="inicial">
  <form id="regForm" action="location.php">
  <h1>Triagem</h1>
  <!-- One "tab" for each step in the form: -->
  <div class="tab">
    <label>1) Como está seu apetite? </label>
    <select>
      <option>Me alimento de 3 em 3 horas</option>
      <option>Não sinto muita fome</option>
      <option>Não tenho fome</option>
    </select>

    <label> 2) Como está a frequencia do seu sono?</label>
    <select>
      <option>Durmo até 8 horas por dia</option>
      <option>Durmo até 6 horas por dia</option>
      <option>Durmo menos de 6 horas por dia</option>
      <option>Durmo mais de 8 horas por dia</option>
      <option>Não sinto sono</option>
    </select>
  
    <label>3) Sente cansaço, Falta de energia? </label>
    <select>
      <option>Sempre</option>
      <option>Algumas vezes ao dia</option>
      <option>Não</option>
    </select>
 
    <label>4) Sente dificuldade para se concentrar e realizar tarefas?</label>
    <select>
      <option>Não consigo me concentrar</option>
      <option>As vezes consigo me concentrar</option>
      <option>Não</option>
    </select>
  </div>

<div class="tab">
    <label>5) Existe histórico de doenças relacionadas a saúde mental na sua familia? </label>
    <select>
      <option>Sim</option>
      <option>Não</option>
    </select>

    <label>  6) Como é seu convivio social? </label>
    <select>
      <option>Não consigo socializar</option>
      <option>As vezes socializo por necessicade</option>
      <option>Não tenho problemas com isso</option>
      <option>Me esforço para socializar</option>
    </select>
 
    <label>  7) Sente alterações em seu humor? </label>
    <select>
      <option>Muitas vezes ao dia</option>
      <option>As vezes</option>
      <option>Não</option>
    </select>
  
    <label>   8) Você tem sonhos,metas ou planos para o futuro? </label>
    <select>
      <option>Sim, tenho muitos</option>
      <option>Tenho alguns</option>
      <option>Não tenho nenhum</option>
      <option>Não penso nisso</option>
    </select>
  </div> 
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Voltar</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Próximo</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;">
    <span class="step"></span>
    <span class="step"></span>
  </div>
</div>
</form>
<script>
  var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Enviar";
  } else {
    document.getElementById("nextBtn").innerHTML = "Próximo";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>
</body>
</html>