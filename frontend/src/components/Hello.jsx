
import React, { useEffect, useState } from 'react'
import style from './css/style.module.css';
import Child from './Child';

const Hello = (props) => {
  const [fname, setfname] = useState();
  useEffect(()=>{
    console.log('Parrent');
  },[]);
  return (
    <>
      <h1 className={style.h1}>Hello this is {props.name}</h1>
      <Child></Child>
      <p className={style.p}>{fname}</p>
      <input type="text" onChange={(e)=> setfname(e.target.value)} value={fname}/>
    </>
  )
}
export default Hello;