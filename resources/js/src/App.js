import React from "react";
import ReactDOM from "react-dom";
import Slide from "./components/Slide";
import Studnent from "./components/Student";
import Footer from "./components/Footer";
import Library from "./components/Library";
import Class from "./components/Class";
import abc from "./css/abc.module.css"

// const App = () => {
//     const[UrlImage , SetUrlImage] = React.useState("images/img-1.jpg");
//     const changeUrlImage = (url)=> SetUrlImage(url) 
//     // const changeUrlImage1 = () =>{
//     //     return SetUrlImage("images/banner-1.jpg")
//     // }
//     // const changeUrlImage2 = () =>{
//     //     return SetUrlImage("images/banner-2.jpg")
//     // }
//     // const changeUrlImage3 = () =>{
//     //     return SetUrlImage("images/banner-3.jpg")
//     // }
//     return (
//         <>
//         <Slide 
//         linh = {UrlImage}
//         linhh = {changeUrlImage}
//          />
//         </>

//     );
// };
// const App = () =>{
//     const eventHanddle = (val)=>{
//         alert(val)
//     }

//     return (
//         <>
//             <button onClick={()=>eventHanddle("Vietpro Academyyy")}>Action</button>
//         </>
//     )

// }

// function App() {

//     const [data, setData] = React.useState({ mail: "", pass: "" })

//     const eventHanddle = (e) => {

//         setData({ [e.target.name]: e.target.value })
//         console.log(data)
//     }

//     return (
//         <>
//             <div className={abc.linh}>linh</div>

//             <form>
//                 <input onChange={eventHanddle} type="mail" name="mail" />
//                 <input onChange={eventHanddle} type="pass" name="pass" />
//             </form>
//         </>
//     )
// }
const App = () => {
    const[sttTitle, setSttTitle] = React.useState(true);
    const[txtTitle, setTxtTitle] = React.useState('What is Lorem Ipsum?');
    const changeSttTitle = () => {
        return setSttTitle(!sttTitle)
    }
    // const changeSttTitle1 = () =>{
    //     return setTxtTitle()
    // }
    // const[]
    return(
        <Studnent
        linh =  {txtTitle}
        long = {changeSttTitle}
        lanh = {sttTitle}
        // hoang  = {changeSttTitle1}
        />
    )
}



ReactDOM.render(<App />, document.getElementById('app'));
