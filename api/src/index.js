const express = require("express");
const mysql = require("mysql");

const app = express();

const connection = mysql.createConnection({
  host: "mysql-container",
  user: "root",
  password: "senhadeteste",
  database: "lista"
});
connection.connect();

app.get("/products", (req, res) => {
  connection.query("select * from products", (err, result) => {
    if (err) res.send("error");
    else res.send(result.map(item => ({ name: item.info, price: item.price })));
  });

  // res.send([{ name: "teste", price: 20 }]);
});

app.listen(3333);
