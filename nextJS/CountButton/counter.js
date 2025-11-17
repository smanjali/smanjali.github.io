import React from 'react'

const CountButton = () => {
    const CurrentCount = 0
    const CurrentCount2 = 0

    const handleClicK = () => {
        CurrentCount + 1
    }
    const handleClicK2 = () => {
        CurrentCount2 + 7
    }

    return (
        <div>
            <button onClick={handleClicK}>+1</button>
            <p>Count: {CurrentCount}</p>
            <button onClick={handleClicK2}>+7</button>
            <p>Count: {CurrentCount2}</p>
        </div>
    )
}