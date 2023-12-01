<?php
  include_once("templates/header.php");
?>

<link rel="stylesheet" href="css/carrinho.css">
</head>
<body>

<body>

<?php

function getCardBrand($cardNumber) {
    
    return 'visa';
}


$cardNumberPlaceholder = '** ** ** 1234';
$cardNamePlaceholder = 'John Doe';
$cardValidPlaceholder = '12/23';
?>

<form class="forms">
  <div style="display: flex; justify-content: space-between;">
    <div>
      <h2> Nome no cartão:</h2>
      <input type="text" name="card_name" id="cardNameInput" class="forms1"> <br> 
      <h2> Número do cartão: </h2>
      <input type="text" name="card_number" id="cardNumberInput" class="forms1"><br>
      <h2>Parcela: </h2>
      <select name="card_parcel" id="cardParcelInput" class="forms1">
        <?php for ($i = 1; $i <= 6; $i++): ?>
          <option value="<?php echo $i; ?>"><?php echo $i; ?>x sem juros</option>
        <?php endfor; ?>
      </select><br>
    </div>
       
   
    <div>
     <h2> Data de validade: </h2>
     <input type="text" name="card_valid" id="cardValidInput" class="forms1"><br>
      <h2> CVC: </h2>
       <input type="text" name="card_code" id="cardCodeInput" class="forms1"><br>
    </div>
  </div>
</form>

<?php

$cardBrand = getCardBrand($cardNumberPlaceholder);
?>

<div class="live-update card" id="liveUpdateCard">
  <img class="card-brand" src="path/to/<?php echo $cardBrand; ?>.png" alt="Card Brand">
  <div class="card-number"><?php echo $cardNumberPlaceholder; ?></div>
  <div class="card-name"><?php echo $cardNamePlaceholder; ?></div>
  <div class="card-valid">Validade: <?php echo $cardValidPlaceholder; ?></div>
</div>

<button type="button">Finalizar Compra</button>

 
<script>
  
  function updateCard() {
    const cardNumberInput = document.getElementById('cardNumberInput');
    const cardNumber = cardNumberInput.value;
    const cardName = document.getElementById('cardNameInput').value;
    const cardValid = document.getElementById('cardValidInput').value;

    const liveUpdateCard = document.getElementById('liveUpdateCard');
    const cardBrandImage = liveUpdateCard.querySelector('.card-brand');
    const cardNumberDiv = liveUpdateCard.querySelector('.card-number');

    cardNumberDiv.textContent = cardNumber;

    
    const firstDigit = cardNumber.charAt(0);
    switch (firstDigit) {
      case '3':
        case '7':
        cardBrandImage.src = 'imgs/americam.png'; 
        break;
      case '4':
      case '2':
      case '9':
        cardBrandImage.src = 'imgs/visa.png'; 
        break;
      case '5':
        case'1':
        cardBrandImage.src = 'imgs/mastercard.png'; 
        break;
      case '6':
        case '8':
        case '0':
        cardBrandImage.src = 'imgs/elo.png'; 
        break;
      default:
        cardBrandImage.src = 'visa.png'; 
    }
    // Defina o tamanho da imagem
    cardBrandImage.style.width = '100px';
    cardBrandImage.style.height = '50px';

    // Update card name and valid date
    liveUpdateCard.querySelector('.card-name').textContent = cardName;
    liveUpdateCard.querySelector('.card-valid').textContent = 'Validade: ' + cardValid;
  }

  // Function to clear the form
  function clearForm() {
    document.getElementById('cardForm').reset();
    updateCard(); // Update the card after clearing the form
  }

  // Add event listeners to input fields for live updating
  const formInputs = document.querySelectorAll('input[type="text"]');
  formInputs.forEach(input => {
    input.addEventListener('input', updateCard);
  });

  // Update the card on page load
  updateCard();
</script>

</body>
</html>
