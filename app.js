const form = document.getElementById('calcForm');
const numberA = document.getElementById('numberA');
const numberB = document.getElementById('numberB');
const operation = document.getElementById('operation');
const errorDiv = document.getElementById('error');
const historyList = document.getElementById('historyList');

let history = [];

form.addEventListener('submit', function(e) {
    e.preventDefault(); 

    const a = parseFloat(numberA.value);
    const b = parseFloat(numberB.value);
    const op = operation.value;

   
    if (isNaN(a) || isNaN(b)) {
        errorDiv.textContent = "Veuillez entrer des nombres valides.";
        return;
    }
    if (op === '/' && b === 0) {
        errorDiv.textContent = "Division par zéro interdite.";
        return;
    }

    errorDiv.textContent = ""; 

  
    let result;
    switch(op) {
        case '+': result = a + b; break;
        case '-': result = a - b; break;
        case '*': result = a * b; break;
        case '/': result = a / b; break;
    }

  
    const operationStr = `${a} ${op} ${b} = ${result}`;
    history.push(operationStr);

 
    historyList.innerHTML = '';
    history.forEach(item => {
        const li = document.createElement('li');
        li.textContent = item;
        historyList.appendChild(li);
    });

   
    form.reset();
});