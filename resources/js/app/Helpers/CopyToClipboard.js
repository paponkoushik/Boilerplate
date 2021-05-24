export default class CopyToClipboard {
    /*
    * Copy
    */
    static copyDom (id) {
        const copyText = document.getElementById(id);
        copyText.classList.remove('d-none');
        copyText.select();

        try {
            let successful = document.execCommand('copy');
            copyText.classList.add('d-none');
            return successful ? 'successful' : 'unsuccessful';
        } catch (err) {
            return err;
        }

        /* unselect the range */
        window.getSelection().removeAllRanges()
    }
}
