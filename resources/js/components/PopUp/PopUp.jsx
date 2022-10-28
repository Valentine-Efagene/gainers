// import { Snackbar } from "@mui/material";
import React, { useEffect } from "react";
import ReactDOM from "react-dom";
import { useState } from "react";
import Toast from "react-bootstrap/Toast";
import ToastContainer from "react-bootstrap/ToastContainer";
import { faker } from "@faker-js/faker";
import styles from "./PopUp.module.css";

function getRndInteger(min, max) {
    return Math.floor(Math.random() * (max - min)) + min;
}

function PopUp() {
    const [open, setOpen] = useState(false);

    useEffect(() => {
        setInterval(() => {
            setOpen((prevState) => !prevState);
        }, getRndInteger(3000, 5000));
    }, []);

    return (
        <ToastContainer className={styles.container} position="bottom-end">
            <Toast
                show={open}
                onClose={() => {
                    setOpen(false);
                }}
            >
                <Toast.Header>
                    <strong className="me-auto">Update</strong>
                    {/* <small>11 mins ago</small> */}
                </Toast.Header>
                <Toast.Body>
                    {`${faker?.name?.firstName()} just ${
                        Math.random() < 0.5 ? "deposited" : "withdrew"
                    } ${faker?.finance?.amount(5, 100, 0, "$")}.`}
                </Toast.Body>
            </Toast>
        </ToastContainer>
    );
}

export default PopUp;

const element = document.getElementById("pop_up");

if (element) {
    // setTimeout(() => {
    //     ReactDOM.render(<PopUp />, element);
    // }, 2000);
    ReactDOM.render(<PopUp />, element);
}
