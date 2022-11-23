import React from "react";
import { BrowserRouter, Navigate, Route, Routes, Outlet } from "react-router-dom";

import { Login, Signup, Home, Navbar } from './pages'
const App = () => {
  return (
    <div>
      {/* <Admin /> */}
      {/* <Client /> */}
      <BrowserRouter>
        <Routes>
          <Route path="/" element={<Layout />}>
            <Route path="/" element={<Navigate to="/home" replace />} />
            <Route path="/home" element={<Home />} />



            <Route path="/login" element={<Login />} />
            <Route path="/signup" element={<Signup />} />
          </Route>
        </Routes>
        {/* <Route path="/" element={<TutorialsList />} />
        <Route path="/tutorials" element={<TutorialsList />} />
        <Route path="/add" element={<AddTutorial />} /> */}
      </BrowserRouter>
    </div>
  )
}
function Layout() {
  return (
    <div>
      <Navbar />
      <Outlet />
    </div>
  );
}
export default App;