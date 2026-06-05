function mapObject(obj, callback) {
    let result = {};

    for (let key in obj) {
        let oldValue = obj[key];
        let newValue = callback(oldValue);

        result[key] = newValue;
    }

    for (let key in result) {
        console.log(key + ': ' + result[key]);
    }

    return result;
}

const nums = { a: 1, b: 2, c: 3 };
mapObject(nums, x => x * 2) // { a: 2, b: 4, c: 6 }
