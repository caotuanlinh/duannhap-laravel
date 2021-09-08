import React from 'react';

const Slide = (props) => {
    const [imageUrl, setImageUrl] = React.useState([
        "images/img-1.jpg",
        "images/img-2.jpg",
        "images/img-3.jpg"
    ])
    const changeUrlImage = (val)=>{
        props.linhh(val)
    }
    const imagesUrl = imageUrl.map((val,index)=>{
        return <img
        onClick={()=>changeUrlImage(val)}
        // class={val===props.imageUrl? "active": ""}
        src={val}
        />
    })
    return (
        <div id="products">
            <div>
                <div id="large"><img src={props.linh} /></div>
                <p id="small">
                    {imagesUrl}
                </p>
            </div>

        </div>

    )
}
export default Slide;
