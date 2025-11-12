import ReactDOM from 'react-dom'
import CountButton from './counter'

const App = () => {
    return (
        <div>
            <CountButton />
        </div>
    );
}

const reactContentRoot = document.getElementById('root')

ReactDOM.render(<App />, reactContentRoot);