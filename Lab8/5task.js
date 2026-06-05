const users = [
    { id: 1, name: "Alice" },
    { id: 2, name: "Bob" },
    { id: 3, name: "Charlie" }
];

let names = users.map(tmpUser => tmpUser.name);
console.log(names);
