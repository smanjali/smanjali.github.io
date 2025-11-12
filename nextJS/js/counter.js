const reactContentRoot = document.getElementById('root')

const counter1 = 0
const counter2 = 0

function counter1() {
    counter1++
    return counter1
}

function counter2() {
    counter2+=7
    return counter2
}


const Count = () => {
    return (
        <div>
            <button>JSX {counter1}</button>
            <button>JSX {counter2}</button>
        </div>
    )
    
}

ReactDOM.render(
  <Count />,
  reactContentRoot
)