import {optional, collection} from './Helpers'

export const users = (nEvent) => {
    const audiences = collection(
        optional(nEvent.settings, 'audiences')
    ).find('users', 'audience_type');

    if (audiences) {
        return optional(audiences, 'audiences');
    }
    return []
};

export const roles = (nEvent) => {
    const audiences = collection(
        optional(nEvent.settings, 'audiences')
    ).find('roles', 'audience_type');

    if (audiences) {
        return optional(audiences, 'audiences');
    }
    return []
};
