const reactContentRoot = document.getElementById('root')

const counter1 = 0
const counter2 = 0

const Count = () => {
    counter1++
    counter2+= 7
    return (
        <div>
            <button>JSX {counter1}</button>
            <button>JSX {counter2}</button>
        </div>
    )
    
}

ReactDOM.render(
  myJSXElement,
  reactContentRoot
)