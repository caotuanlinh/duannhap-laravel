import { update } from "lodash";
import React from "react";
const Studnent = (props) => {
    const setSttTitle = () =>{
        props.long()
    }
    const txtTitle = () => {
        return (
            <h4 onDoubleClick={setSttTitle}>{props.linh}</h4>
        )
    }
    const frmTitle = () =>{
        return(
            <input 
            // onChange={(e) => UpdateTxt(e)}
            onBlur={setSttTitle}
            type="text"
            value={props.txtTitle}
            />
        )
    }
    // const UpdateTxt = (e) =>{
    //   return props.hoang(e)
    // }
    const showTitle = () =>{
        if (props.lanh == true) {
            return txtTitle()
        } else {
            return frmTitle()
        }
    }
    return (
        <div id="main">
            <div className="content-item">
                <img src="images/car.jpg" />
                <h4>{showTitle()}</h4>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </div>
        </div>

    )
}
export default Studnent;