
export interface GlobalState {
  players: Player[]
  starters: Starter[]
  substitutes: Substitute[]
  isShowLeftDroper: boolean
  isShowRightDroper: boolean
  isShowFieldDroper: boolean
}

export interface Player {
  id: any
  name: string
  number: number
  position: POSITION
  avatar: string
}

export interface Starter {
  player: Player
  left: number
  top: number
  position: POSITION
}

export interface Substitute {
  player: Player
}

export enum ItemTypes {
  player = 'player',
  starter = 'starter',
  substitute = 'substitute'
}

export interface Action {
  type: string
  data?: any
}

export enum POSITION {
  PG = "Point Guard",
  SG = "Shooting Guard",
  SF = "Small Forword",
  PW = "Power Forward",
  C = "Center"
}