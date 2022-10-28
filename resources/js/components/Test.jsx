import React from "react";
import ReactDOM from "react-dom";
import styles from "./PopUp/PopUp.module.css";

function Test() {
    return <div className={styles.container}>OK, please work 2</div>;
}

export default Test;

if (document.getElementById("test")) {
    ReactDOM.render(<Test />, document.getElementById("test"));
}
