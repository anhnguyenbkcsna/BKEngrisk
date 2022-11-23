import React, { useState } from 'react';
import Axios from 'axios';
import { useNavigate } from "react-router-dom";
export default function Signup() {

    const [userName, setUserName] = useState("");
    const [password, setPassword] = useState("");
    const [email, setEmail] = useState("");
    const [hoTen, setHoTen] = useState("");
    const [namSinh, setNamSinh] = useState();
    const [tel, setTel] = useState();
    const [gt, setGt] = useState(0);
    const [error, setError] = useState("");
    const navigate = useNavigate();
    const register = () => {
        Axios.post("http://localhost:3001/register", {
            username: userName,
            password: password,
            email: email,
            namsinh: namSinh,
            hoTen: hoTen,
            tel: tel,
            gt: gt,
        }).then((res) => {
            if (res.status === 200) {
                navigate('/login')
            }
        })
    }

    const handleValidation = (event) => {
        let formIsValid = true;
        if (!password.match(/^[a-zA-Z]{8,22}$/)) {
            setError("Only Letters and length must best min 8 Chracters and Max 22 Chracters");
            return !formIsValid;
        } else if (!tel.match(/^[0-9]/)) {
            setError("So dien thoai chi co so");
            return !formIsValid;
        }
        else {
            setError("");
            formIsValid = true;
        }

        return formIsValid;
    };

    const handleSubmit = (e) => {
        e.preventDefault();
        if (handleValidation()) {
            register();
        }
    };

    return (
        <>
            <div className="row d-flex justify-content-center">
                <div className="col-md-4">
                    <h1 >Đăng ký</h1>
                    <form id="loginform" onSubmit={handleSubmit} >
                        <div className="form-group">
                            <label>Tên Đăng Nhập</label>
                            <input type="text" required className="form-control"
                                onChange={(e) => setUserName(e.target.value)} />
                        </div>
                        <div className="form-group">
                            <label>Mật Khẩu</label>
                            <input type="password" required className="form-control"
                                onChange={(e) => setPassword(e.target.value)} />

                        </div>
                        <div className="form-group">
                            <label>Họ Tên</label>
                            <input type="text" required placeholder="Trần Văn A" className="form-control"
                                onChange={(e) => setHoTen(e.target.value)} />
                        </div>
                        <div className="form-group">
                            <label>Năm Sinh</label>
                            <input type="text" required className="form-control"
                                onChange={(e) => setNamSinh(e.target.value)} />
                        </div>
                        <div className="form-group">
                            <label>Giới Tính</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" required />
                                <label class="form-check-label" for="inlineRadio1">Nam</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" required />
                                <label class="form-check-label" for="inlineRadio2">Nữ</label>
                            </div>
                        </div>

                        <div className="form-group">
                            <label>Email</label>
                            <input type="email" required placeholder="Email" className="form-control"
                                onChange={(e) => setEmail(e.target.value)} />
                        </div>
                        <div className="form-group">
                            <label>Số Điện Thoại</label>
                            <input type="text" required placeholder="" className="form-control"
                                onChange={(e) => setTel(e.target.value)} />
                        </div>


                        <button type="submit" className="btn btn-primary" >Sign In</button>
                        <small id="error" className="text-danger form-text">
                            {error}
                        </small>

                    </form>
                </div>

            </div>
        </>

    )

};