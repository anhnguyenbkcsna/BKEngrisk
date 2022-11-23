const express = require('express')
const cors = require("cors");
const mysql = require('mysql')
// const bodyParser = require('body-parser')

const app = express()

const port = process.env.PORT || 3030;

var corsOptions = {
    origin: "http://localhost:3031"
};

app.use(cors(corsOptions));
app.use(express.json());
app.use(express.urlencoded({ extended: true }));

const db = require("./app/models");
db.sequelize.sync({ force: true }).then(() => {
    console.log("Drop and re-sync db.");
});



require("./app/routes/chinhanh.routes")(app);

app.listen(port, () => console.log(`Listening on port ${port}`))