
import React, { useState } from 'react'

const Hello = (props) => {
  const [fname, setfname] = useState('');
  console.log(fname);
  return (
    <>
      <h1>Hello this is {props.name}</h1>
      <p>{fname}</p>
      <input type="text" onChange={(e)=> setfname(e.target.value)} value={fname}/>
    </>
  )
}
export default Hello;