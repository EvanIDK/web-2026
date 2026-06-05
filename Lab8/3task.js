function uniqueElements(arr) {
    let result = {};

    for (let item of arr) {
        let key = String(item);

        if (result[key] === undefined) {
            result[key] = 1;
        } else {
            result[key] = result[key] + 1;
        }
    }

    for (let key in result) {
        console.log(key + ': ' + result[key]);
    }

    return result;
}

uniqueElements(['привет', 'hello', 1, '1']); // {'привет': 1, 'hello': 1, '1': 2}
