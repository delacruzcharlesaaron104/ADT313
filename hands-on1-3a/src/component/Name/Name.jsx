import './Name.css';

function Name({ firstName, lastName }) {
    return (
        <div>
            <h1 className='lname'><span className="fname"> {firstName} </span>
                <span className="lname"></span> {lastName}</h1>

        </div>
    )

}

export default Name;