let validCh = ['а', 'е', 'ё', 'и', 'о', 'у', 'ы', 'э', 'ю', 'я']

function countVowels(str) {
    let count = 0;
    let foundedValidCh = [];
    let lowerStr = str.toLowerCase();

    for (let ch of lowerStr) {
        if (validCh.includes(ch)) {
            foundedValidCh.push(ch);
            count += 1;
        }
    }

    let result = foundedValidCh.join(', ');

    if (count !== 0) {
        console.log(count + ' (' + result + ')')
    } else {
        console.log('Нет гласных')
    }
    return
}


countVowels("Привет, мир!") // 3 (и, е, и)
countVowels("ааа")
countVowels("!!")