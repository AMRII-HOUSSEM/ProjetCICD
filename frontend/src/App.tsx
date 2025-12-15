import { useEffect, useState } from "react";

function App() {
  const [status, setStatus] = useState("");

  useEffect(() => {
    fetch("http://localhost:8000/api/health")
      .then(res => res.json())
      .then(data => setStatus(data.message));
  }, []);

  return (
    <div>
      <h1>Laravel + React + CI/CD</h1>
      <h2>Status: {status}</h2>
    </div>
  );
}

export default App;
