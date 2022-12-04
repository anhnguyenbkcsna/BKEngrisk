const express = require('express')
const cors = require("cors");
const mysql = require('mysql')
const port = process.env.PORT || 3001;
const app = express();

app.use(express.json());


app.use(cors());
const db = mysql.createConnection({
    user: 'root',
    host: 'localhost',
    password: '',
    database: 'test_bk',
});


app.post('/register', (req, res) => {
    const username = req.body.username;
    const password = req.body.password;
    const namsinh = req.body.namsinh;
    const hoTen = req.body.hoTen;
    const email = req.body.email;
    const tel = req.body.tel;
    const gt = req.body.gt;
    db.query(
        "INSERT INTO users (username, password, HoTen, NamSinh, GioiTinh, Email, SoDienThoai) VALUES (?, ?, ?, ?, ? ,? ,?)",
        [username, password, hoTen, namsinh, gt, email, tel],
        (err, result) => {
            if (err) {
                res.send({ err: err })
            } else {
                console.log(result)
                res.send(result);

            }
        }
    )
})

app.post('/login', (req, res) => {
    const username = req.body.username;
    const password = req.body.password;

    db.query(
        "SELECT * FROM users WHERE username = ? AND password = ?",
        [username, password],
        (err, result) => {
            if (err) {
                res.send({ err: err })
            } else {
                if (result) {
                    // res.send(result);
                    res.send('client');
                } else {
                    res.send({ message: 'Wrong user or password' })
                }
            }
        }
    )
})

app.listen(port, () => {
    console.log(`listening on ${port}`);
})