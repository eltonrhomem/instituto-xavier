import axios from 'axios';
//let a = ('{{ env("APP_URL") }}');
//console.log('alert = ',  process.env.MIX_APP_URL)
axios = axios.create({
    baseURL: process.env.MIX_APP_URL + ':' + process.env.MIX_APP_PORT + '/api/'
})
//const urlBase = process.env.MIX_APP_URL + ':' + process.env.MIX_APP_PORT + '/api/alunos';
//console.log('env', env(APP_URL))

function salvarAluno(dados)
{
    return axios.post(`alunos`, dados);
}

 function getAluno(id)
{
    return axios.get(`alunos/${id}`);
}

const repositorioAPIAluno = {
    salvarAluno,
    getAluno,
};

export default repositorioAPIAluno;