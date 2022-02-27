import React, { useState } from 'react'
import ReactDOM from 'react-dom'
import { Button, Toast } from 'react-bootstrap'

function CopyButton(props) {
    const [show, setShow] = useState(false)

    const handleCopy = () => {
        navigator.clipboard.writeText(props.referral_link)
        setShow(true)
        // setTimeout(() => {setShowError(false)}, 2000)
    }

    return (
        <>
            <Button variant="primary" onClick={handleCopy}>
                Copy Referral Link
            </Button>
            {/* <Alert show={show} variant="success" dismissible>
                Copied
            </Alert> */}

            <Toast
                style={{
                    fontWeight: 'bold',
                    background: '#C9FDC9',
                    padding: '10px',
                    textAlign: 'center',
                    boxShadow: '1px 0px 40px 1px #9E9E9E',
                }}
                onClose={() => setShow(false)}
                show={show}
                delay={1000}
                autohide
            >
                <Toast.Body>Copied</Toast.Body>
            </Toast>
        </>
    )
}

export default CopyButton

var element = document.getElementById('copy_button')

if (element) {
    console.log('Found the id')
    ReactDOM.render(
        <CopyButton referral_link={element.getAttribute('referral_link')} />,
        element
    )
}
