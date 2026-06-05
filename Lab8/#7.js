function generatePassword(length) {
    if (length < 4) {
        console.log("пароль не менее 4 символов");
        return "";
    }

    const lowerCh = "abcdefghijklmnopqrstuvwxyz";
    const upperCh = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    const number = "0123456789";
    const specialCh = "!@#$%^&*()_+";

    function getRandom(size) {
        return Math.floor(Math.random() * size);
    }

    let mustBeCh = [
        lowerCh[getRandom(lowerCh.length)],
        upperCh[getRandom(upperCh.length)],
        number[getRandom(number.length)],
        specialCh[getRandom(specialCh.length)]
    ];

    let allChars = lowerCh + upperCh + number + specialCh;

    for (let i = 4; i < length; i++) {
        let randomNum = getRandom(allChars.length);
        mustBeCh.push(allChars[randomNum]);
    }

    mustBeCh.sort(() => (Math.random() - 0.5));

    let password = mustBeCh.join("")

    console.log("Сгенерированный пароль: " + password);
    return password;
}

generatePassword(3);
generatePassword(4);
generatePassword(12);
