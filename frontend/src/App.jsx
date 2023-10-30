import { useState } from 'react'
import reactLogo from './assets/react.svg'
import viteLogo from '/vite.svg'
import './App.css'
import Posts from './components/pages/Posts'


function App() {
  const [count, setCount] = useState(0)

  return (
    <>
      <div>
        <Posts></Posts>
      </div>
    </>
  )
}

export default App
