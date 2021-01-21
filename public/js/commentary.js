//Ask for a confirmation before delete, and change table row content with a smooth transition

class Commentary {

    constructor(id, chapter) {

        //Values:
        this.id = id;
        this.chapter = chapter;
        this.comRowID = "comRow" + id;

        //DOM
        this.comRow = document.getElementById(this.comRowID);
        this.btnDelete = document.getElementById("deleteFlagComment" + id);
        this.btnValidate = document.getElementById("validFlagComment" + id);

        //Method called:

    }

    deleteCom() {
        confirm('Attention vous vous apprêtez à supprimer un commentaire. Continuer ?');

        this.btnDelete.innerHTML = "En cours de suppression...";
        this.btnDelete.style.backgroundColor = 'grey';

        let confirmationMsg = "<td class='comRowTd' colspan='5'>Commentaire supprimé<i class='bi bi-check'></i></td>";
        this.changeRowContent(confirmationMsg);
    }

    validCom() {
        this.btnValidate.innerHTML = "En cours de validation...";
        this.btnValidate.style.backgroundColor = 'green';
        let chapterNumber = this.chapter;
        let confirmationMsg = `"<td class='comRowTd' colspan='5'>Commentaire validé<i class='bi bi-check'></i><br>Retouver ce commentaire sous l'onglet du chapitre ` + chapterNumber + `</td>"`;
        console.log("test de validCom");
        this.changeRowContent(confirmationMsg);
    };

    changeRowContent(confirmationMsg) {
        let selfThis = this;

        this.comRow.classList.add('transitionOneLinear');
        this.comRow.classList.add('visuallyhidden');

        this.comRow.addEventListener('transitionend', function (e) {
            let selfThis2 = selfThis;
            setTimeout(function () {
                selfThis2.comRow.innerHTML = confirmationMsg;
                selfThis2.comRow.classList.remove('visuallyhidden');
            }, 2000);
        }, {
            capture: false,
            once: true,
            passive: false
        });
    };
}