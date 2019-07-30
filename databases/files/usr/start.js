const sql = require('sqlite')
const dbPromise = sql.open('create.sql', {Promise});

const db = new dbPromise();

db.get("SELECT * FROM dataTabelKu").then(data => {

console.log(data.id);
})
