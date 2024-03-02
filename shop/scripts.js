 function updateSecondSelect(firstSelect) {

        var selectedValue = firstSelect.value;
        var secondSelect = document.getElementById('secondSelect');
        var options = {
            Recordins: ['Vocal Recordings', 'Song Recordings', 'Guitar Recordings','Piano Recordings'],
            Studios: ['Sound Studio', 'Recording Studio', 'Sound Practise Studio','Vedio Studio'],
            Productions: ['Mixing', 'Master', 'Vocal Covers','Instrumental Covers'],
            Artists: ['Dilshan Priyankara', 'Dinesh Subasingha', 'Dileepa mangala','Dilan Priyankara']
        };
        // Clear existing options in the second select
        secondSelect.innerHTML = '';
        // Populate options in the second select
        for (var i = 0; i < options[selectedValue].length; i++) {
            var option = document.createElement('option');
            option.text = options[selectedValue][i];
            option.value = options[selectedValue][i];
            secondSelect.appendChild(option);
        }
    }
// Initial population of the second select
updateSecondSelect(document.getElementById('firstSelect'));



