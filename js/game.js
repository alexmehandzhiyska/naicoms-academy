let result = 0;

async function playGame() {
    const compNum = Math.ceil(Math.random() * 6);

    const userNum = await window.prompt('Please choose a number between 1 and 6');

    if (compNum == userNum) {
        result += 2
    } else if (userNum == compNum + 1 && userNum == compNum - 1) {
        result += 1;
    }

    const playAgain = await window.confirm('Play Again?');

    if (playAgain) {
        await playGame();
    } else {
        await alert(`The result is: ${result}`);
    }
}

playGame();