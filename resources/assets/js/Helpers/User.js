import Token from './Token';
import AppStorage from './AppStorage';

class User {
    login(data){
        axios.post('/api/auth/login', data)
            .then(response => this.responseAfterLogin(response))
            .catch(error => console.log(error.response.data))
    }

    responseAfterLogin(response){

        const token = response.data.access_token;
        const username = response.data.user;

        if(Token.isValid(token)){
            AppStorage.store(token, username)
            window.location = '/forum'
        }
    }

    hasToken(){
        const storedToken = AppStorage.getToken();
        if(storedToken){
            return Token.isValid(storedToken) ? true : false ;
        }
        return false;
    }

    loggedIn(){
        return this.hasToken();
    }

    logout(){
        AppStorage.clear();
        window.location = '/forum'
    }

    name(){
        if(this.loggedIn()){
            return AppStorage.getUser();
        }
    }

    id(){
        if(this.loggedIn()){
            const payload = Token.payload(AppStorage.getToken());
            return payload.sub;
        }
    }
}
export default User = new User();