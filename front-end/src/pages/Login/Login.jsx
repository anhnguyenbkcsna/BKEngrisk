import React, { useState } from 'react';
import Axios from 'axios';
import { useNavigate } from "react-router-dom";
import { useCookies } from 'react-cookie';
import "bootstrap/dist/css/bootstrap.min.css";

export default function Login() {

    const [userName, setUserName] = useState("");
    const [password, setPassword] = useState("");
    const [passwordError, setpasswordError] = useState("");
    const [cookies, setCookie] = useCookies(['user']);


    const navigate = useNavigate()
    const login = () => {
        Axios.post("http://localhost:3001/login", {
            username: userName,
            password: password,
        }).then((response) => {
            if (response.statusText === 'OK') {
                navigate("/home");
            }

        })
    }

    const handleValidation = (event) => {
        let formIsValid = true;
        if (!password.match(/^[a-zA-Z]{8,22}$/)) {
            formIsValid = false;
            setpasswordError(
                "Only Letters and length must best min 8 Chracters and Max 22 Chracters"
            );
            return false;
        } else {
            setpasswordError("");
            formIsValid = true;
        }

        return formIsValid;
    };

    const handleSubmit = (e) => {
        e.preventDefault();
        if (handleValidation()) {
            login();
            setCookie('Name', userName, { path: '/' });
            setCookie('Password', password, { path: '/' });
        }
    };
    return (
        <>
            <div className="row d-flex justify-content-center">
                <div className="col-md-4">
                    <h1 >Đăng nhập</h1>
                    <form id="loginform" onSubmit={handleSubmit} >
                        <div className="form-group">
                            <label>Username</label>
                            <input type="text" required placeholder="username" className="form-control"
                                onChange={(e) => setUserName(e.target.value)} />
                        </div>
                        <div className="form-group">
                            <label>Password</label>
                            <input type="password" required placeholder="password" className="form-control"
                                onChange={(e) => setPassword(e.target.value)} />
                            <small id="passworderror" className="text-danger form-text">
                                {passwordError}
                            </small>
                        </div>

                        <button type="submit" className="btn btn-primary" >Sign In</button>

                        <div id="SignUp">
                            <div>Chưa có tài khoản? </div>
                            <div><a href="/signup">Đăng ký</a></div>
                        </div>
                    </form>
                </div>

            </div>

        </>
    )

};