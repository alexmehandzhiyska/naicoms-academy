const calculatorEl = document.getElementById('calculator');
const resultBtnEls = Array.from(document.querySelectorAll('#operation-btns .result-btn'));
const operationBtnEls = Array.from(document.querySelectorAll('#operation-btns .operation-btn'));
const operatorBtnEls = Array.from(document.querySelectorAll('#operation-btns .operator'));

const resultEl = document.getElementById('result');
const equalsEl = document.getElementById('equals');

let result = 0;

resultBtnEls.forEach(btnEl => {
    btnEl.addEventListener('click', e => {
        resultEl.textContent == 0 ? resultEl.textContent = e.target.textContent : resultEl.textContent += e.target.textContent
    });
});

operatorBtnEls.forEach(operatorBtn => {
    operatorBtn.addEventListener('click', e => {
        if (e.target.textContent == '+/-') {
            resultEl.textContent = -(Number(resultEl.textContent));
            return;
        }

        if (e.target.textContent == '.') {
            resultEl.textContent += e.target.textContent;
        } else {
            resultEl.textContent += ` ${e.target.textContent} `;
        }
    });
});

operationBtnEls.forEach(operationBtn => {
    operationBtn.addEventListener('click', () => {
        if (operationBtn.textContent == 'C') {
            resultEl.textContent = 0;
        }
    })
})

equalsEl.addEventListener('click', e => {
    // All parts of the equation (nums and operators) are split by a " ". Get these elements
    const equationEls = resultEl.textContent.split(' ');

    let result = 0;
    let prevResult = Number(equationEls[0]);

    for (let i = 1; i < equationEls.length; i += 2) {
        const operator = equationEls[i];
        const num2 = Number(equationEls[i + 1]);

        switch (operator) {
            case '+':
                result = prevResult + num2;
                break;

            case '-':
                result = prevResult - num2;
                break;

            case 'x':
                result = prevResult * num2;
                break;

            case '/':
                result = prevResult / num2;
                break;

            case '%':
                result = prevResult % num2;
                break;

            case '1/x':
                result = 1 / prevResult;
                break;

            case 'x²':
                result = Math.pow(prevResult, 2);
                break;

            case '√x':
                result = Math.sqrt(prevResult);
                break;
        }

        prevResult = result;
    }

    resultEl.textContent = result;
});