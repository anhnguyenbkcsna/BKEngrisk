import React from "react";
import { BrowserRouter, Navigate, Route, Routes } from "react-router-dom";
import Admin from "./pages/Admin";
import Client from "./pages/Client";

const App = () => {
  return (
    <div>
      {/* <Admin /> */}
      {/* <Client /> */}
      <BrowserRouter>
        <Routes>
          <Route path="/" element={<Navigate to="/client" replace/>} />
          <Route path="/admin" element={<Admin />}/>
          <Route path="/client" element={<Client />}/>
        </Routes>
      </BrowserRouter>
    </div>
  )
}

export default App;